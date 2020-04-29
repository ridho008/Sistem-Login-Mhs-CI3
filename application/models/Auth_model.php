<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
// 	public function insertData()
// 	{
// 		$email = $this->input->post('email', true);
//             $data = [
//                 'name' => htmlspecialchars($this->input->post('name', true)),
//                 'email' => htmlspecialchars($email),
//                 'image' => 'default.jpg',
//                 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
//                 'role_id' => 2,
//                 'is_active' => 0,
//                 'date_created' => time() 
//             ];

//             // siapkan token
//             $token = base64_encode(random_bytes(32));
//             $user_token = [
//                 'email' => $email,
//                 'token' => $token,
//                 'date_created' => time()
//             ];

//             $this->db->insert('user', $data);
//             $this->db->insert('user_token', $user_token);

//             $this->_sendEmail($token, 'verify');

// 	}

// private function _sendEmail($token, $type)
//     {
//         $config = [
//             'protocol'  => 'smtp',
//             'smtp_host' => 'ssl://smtp.googlemail.com',
//             'smtp_user' => 'ridhosurya263@gmail.com',
//             'smtp_pass' => 'warning008',
//             'smtp_port' => 465,
//             'mailtype'  => 'html',
//             'charset'   => 'utf-8',
//             'newline'   => "\r\n"
//         ];
//         $this->email->initialize($config);

//         $this->load->library('email', $config);

//         // cek emailnya di kirim oleh siapa
//         $this->email->from('ridhosurya263@gmail.com', 'Ridho Surya');
//         $this->email->to($this->input->post('email'));

//         if($type == 'verify') {
//             $this->email->subject('Account Verification');
//             $this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urldecode($token) . '">Activate</a>');    
//         } else if($type == 'forgot') {
//             $this->email->subject('Reset Password');
//             $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urldecode($token) . '">Reset Password</a>');
//         }
        

//         if($this->email->send() ) {
//             return true;
//         } else {
//             echo $this->email->print_debugger();
//             die;
//         }

//     }













}