<?php
include 'app/libaray/DB.php';


class settingModel{
    private $db;
public function __construct(){

    $this->db = new Database();

}
public function getAll()
{
   $this->db->query("SELECT * FROM setting order by id DESC");
   $result =  $this->db->All();
    return $result; 

}

public function edit($id,$data)
{
    $this->db->query("UPDATE setting SET
                            logo = :logo,
                            title = :title,
                            abouts = :abouts,
                            newsletter_email =:newsletter_email,
                            insta_logins =:insta_logins,
                            footer = :footer,
                            facebook= :facebook,
                            twitter =:twitter,
                            instagram =:instagram,
                            youtube =:youtube,
                            currency =:currency,
                            email_address =:email_address,
                            address = :address,
                            phone =:phone,
                            favicon =:favicon,
                            notes =:notes,
                            address_2 =:address_2,
                            time_of_work = :time_of_work,
                            Date = :date
                            WHERE id = :id" );

     $this->db->bind(':logo', $data['logo']);
     $this->db->bind(':title', $data['title']);
     $this->db->bind(':abouts', $data['abouts']);
     $this->db->bind(':newsletter_email', $data['newsletter_email']);
     $this->db->bind(':insta_logins', $data['insta_logins']);
     $this->db->bind(':footer', $data['footer']);
     $this->db->bind(':facebook', $data['facebook']);
     $this->db->bind(':twitter', $data['twitter']);
     $this->db->bind(':instagram', $data['instagram']);
     $this->db->bind(':youtube', $data['youtube']);
     $this->db->bind(':currency', $data['currency']);
     $this->db->bind(':email_address', $data['email_address']);
     $this->db->bind(':address', $data['address']);
     $this->db->bind(':phone', $data['phone']);
     $this->db->bind(':favicon', $data['favicon']);
     $this->db->bind(':notes', $data['notes']);
     $this->db->bind(':address_2', $data['address_2']);
     $this->db->bind(':time_of_work', $data['time_of_work']);
     $this->db->bind(':date', $data['date']);
     $this->db->bind(':id', $id);
     if ($this->db->execute()){
        return true;
    }else {
        return false;
    }


}
public function getById($id)
{
  $this->db->query("SELECT* FROM setting WHERE id = :id");
  $this->db->bind(':id',$id);
  $result = $this->db->ById();
  return $result;
}
}