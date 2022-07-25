<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Karachi');
    }

    public function index()
    {


        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [

            'min_length' => 'Password harus 8 atau lebih karakter'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('dashboard');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Password salah!
</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           Email belum aktif
</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar!
</div>');
            redirect('auth');
        }
    }

//     public function register()
//     {


//         $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
//         $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
//             'is_unique' => 'Email sudah terdaftar'
//         ]);
//         $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
//             'matches' => 'Password harus sama',
//             'min_length' => 'Password harus 8 atau lebih karakter'
//         ]);
//         $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

//         if ($this->form_validation->run() == false) {

//             $this->load->view('admin/setting');
//         } else {
//             $data = [
//                 'nama' => htmlspecialchars($this->input->post('nama', true)),
//                 'email' => htmlspecialchars($this->input->post('email', true)),
//                 'image' => 'default.jpg',
//                 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
//                 'role_id' => 1,
//                 'is_active' => 1,
//                 'date_created' => date('Y-m-d H:i:s'),
//             ];
//             $this->db->insert('user', $data);

//             // $this->_sendemail();

//             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
//             Selamat, anda sudah terdaftar!
// </div>');
//             redirect('setting');
//         }
//     }

    // private function _sendemail()
    // {
    //     $config = [
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'smtp.googlemail.com',
    //         'smtp_user' => 'edihendriawan69@gmail.com',
    //         // 'smtp_pass' => 'azhjvtxhkzfgkllo',
    //         'smtp_pass' => 'Aaassaaass123',
    //         'smtp_crypto' => 'ssl',
    //         'smtp_port' => 465,
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => '\r\n'

    //     ];
    //     $this->load->library('email', $config);
    //     // $this->email->initialize($config);

    //     $this->email->from('edihendriawan69@gmail.com', 'Lazizmu DIY');
    //     $this->email->to('edihendriawan110@gmail.com');
    //     $this->email->subject("Testeing");
    //     $this->email->message('hello world');
    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda berhasil logout!
</div>');
        redirect('auth');
    }
    public function blocked()
    {
        echo "Block";
    }
}
