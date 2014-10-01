<?
class Newsletter extends PDODB{
    public function __construct(){
        parent::__construct();
        $this->table = 'newsletter';
    }
    public function save($mail){
        if(!$this->search($mail)){
            $data = array('mail'=>$mail);
            $this->_insert($data);
        }
    }
    private function search($mail){
        $fields = 'id';
        $condition = "mail='$mail'";
        return $this->_where($fields,$condition)->first();
    }
}