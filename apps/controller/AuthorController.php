<?php
class AuthorController extends Controller
{

    public function index()
    {
        $this->model('author');
        $allauthors = $this->author->showAll();
        // dd($allauthors);
        $this->load->view('author.index', ['data' => $allauthors]);
        // $this->load->view('product.index', compact('allproducts'));
    }
    public function create()
    {
        // echo "This is create of ProductController ";
        $this->load->view('product.create', []);
    }
    public function store()
    {
        echo "This is store of ProductController ";
    }

    public function edit($id)
    {
        echo "This is edit of ProductController $id";
    }

    public function update()
    {
        echo "This is update of ProductController ";
    }

    public function show()
    {
        echo "This is show of ProductController ";
    }
    public function destroy()
    {
        echo "This is destroy of ProductController ";
    }
}
