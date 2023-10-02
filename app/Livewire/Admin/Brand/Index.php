<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $brand_id;
    public function deleteBrand($brand_id)
    {        
        $this->brand_id = $brand_id;
    }
    public function destroyBrand()
    {        
        $brand = Brand::find($this->brand_id)->delete();
        session()->flash('message','Bạn đã xóa thành công');

    }
    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.brand.index',['brands'=> $brands]);
    }
}
