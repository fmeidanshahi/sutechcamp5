<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function new(Request $request) {
        //validate
        $this->validate(request(), [
            'vip_plan'   => 'required|min:1|max:3',
        ]);

        $plan_id = $request->input('vip_plan');
        $user = auth()->user();
        if ($user->wallet < Subscribe::prices[$plan_id-1])
            return redirect()->back()->withErrors('موجودی شما کافی نیست');

        $user->wallet -= Subscribe::prices[$plan_id-1];
        $user->update();

        $expired = now(); // Carbon::now()
        if ($plan_id == 1)
            $expired->addMonth(1);
        elseif($plan_id == 2)
            $expired->addMonth(3);
        elseif($plan_id == 3)
            $expired->addMonth(6);

        Subscribe::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id,
            'payment_id' => 1,
            'expired_at' => $expired
        ]);

        return redirect()->back()->with(['message'=>
        '<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
          اشتراک شما با موفقیت ثبت شد.
         </div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        </div>'
        ]);
    }
}
