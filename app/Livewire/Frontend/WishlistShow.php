<?php

namespace App\Livewire\Frontend;
use App\Models\Wishlist;
use Livewire\Component;

class WishlistShow extends Component
{

    public function removeWishlistItem(int $wishlistId)
    {
        Wishlist::where('user_id', auth()->user()->id)->where('id',$wishlistId)->delete();
        $this->dispatch('wishlistAddedUpdate');
        $this->dispatch('message', 
        text : 'Wishlist Item Removed Successfully',
        type : 'success',
        status : 409
        );


    }


    public function render()
    {
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.wishlist-show',[
            'wishlist' => $wishlist
        ]);   
    }
}
