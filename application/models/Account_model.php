<?php 
	class Account_model extends CI_Model{
		public function changeUserPassword($id,$new_password){
			$this->db->set('password',$new_password)->where('id',$id)->update('users');
		
		}

		public function oldPasswordMatches($id,$old_password){
			$query = $this->db->where('id',$id)->where('password',$old_password)->get('users');
			if($query->num_rows()>0){
				return true;
			}
			return false;
		}

			}
?>
