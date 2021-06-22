<?


class CatalogController extends Controller
{

    public $view = 'index';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Каталог';
		
		$this->content = 'test';
    }

}


?>
