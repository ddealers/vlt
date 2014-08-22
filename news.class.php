<?
class News extends PDODB{
    public function __construct(){
        parent::__construct();
        $this->table = 'articles';
        $this->record = false;
    }
    public function all($limit = NULL){
        if(is_null($limit)) $limit = 10;
        return $this->_where("id_article,estatus,title,intro,descr,pic,type,dateReg", "estatus=1", $limit, "id_article DESC");
    }
    public function byCat($cat){
        return $this->_where("id_article,estatus,title,intro,descr,pic,type,dateReg", "estatus=1 AND type=$cat", 10, "id_article DESC");
    }
    public function byId($id){
        return $this->_where("id_article,estatus,title,intro,descr,pic,type,dateReg", "estatus=1 AND id_article=$id", 1);
    }
}