public function index(Request $request){
        $items = Book::with('author')->get();
        return view('book.index', ['items'=>$items]);
    }
