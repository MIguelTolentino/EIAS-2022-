<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Validation\Validator;
use livewire\WithPagination;
use Illuminate\Http\Request;

class BrandLivewire extends Component
{
    public $ids;
    public $name;
    public $search;

    public function resetInputFields()
    {
        $this->name='';
    }
    public function store()
    {
        $validatedData = $this -> validate([
            'name' => ' required | regex:/^[a-zA-Z]+$/ | unique:brands',
        ]);
        Brand::create($validatedData);
        session()->flash('success',' Brand created successfully!');
        $this->resetInputFields();
        $this->emit('brandAdded');
    }
    public function edit($id)
    {
        $brand = Brand::where('id',$id)->first();
        $this->ids = $brand->id;
        $this->name = $brand->name;
    }
    public function update()
    {
        $this->validate([
            'name' => ' required | regex:/^[a-zA-Z]+$/ | unique:brands',
        ]);
        if($this->ids)
        {
            $brand = Brand::find($this->ids);
            $brand->update([
                'name' => $this -> name,
            ]);
            session()->flash('success','Brand has updated Successfully!');
            $this->resetInputFields();
            $this->emit('brandUpdated');
        }
    }
    public function delete($id)
    {
        if($id)
        {
            Brand::where('id',$id)->delete();
            session()->flash('success','Brand has deleted Successfully!');
        }
    }
    public function addNewBrand()
    {
        return view('livewire.brands.create');
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        $brands = Brand::where('name','LIKE', $search)
                        ->orderBy('id','DESC')->paginate(5);
        return view('livewire.brands.index',['brands'=>$brands]);
    }
}
