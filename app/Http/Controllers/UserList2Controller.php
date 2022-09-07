<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use dataTables;
use Yajra\DataTables\DataTables;

class UserList2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = User::latest()->get();
        // echo $books;

        // dd($books);

        if ($request->ajax()){
            $data = User::latest()->get();

            // dd($request);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    // $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Kemaskini</a>';
                    // $btn = '<button type="button" id="postSubmitBtn" data-id="'.$row->id.'" class="btn ripple btn-primary add_user" >Simpan</button>';
                    // $btn = '<i class="bd bd-gray-500 rounded-circle la la-cog"></i>';

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="typcn typcn-folder btn btn-primary btn-sm editBook"></a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Padam</a>';

                    // $btn = '<button class="btn btn-indigo btn-icon" data-id="'.$row->id.'"><i class="typcn typcn-folder"></i></button>';
                    // $btn = $btn.'<button class="btn btn-success btn-icon" data-id="'.$row->id.'"><i class="typcn typcn-document-add"></i></button>';



                    // $btn = '<button type="button" id="postSubmitBtn" data-id="'.$row->id.'" class="btn ripple btn-primary add_user" >Padam</button>';
                    // $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Padam</a>';
                    return $btn;
                    // <button type="button" id="postSubmitBtn" class="btn ripple btn-primary add_user" >Simpan</button>
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('senaraipengguna', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
