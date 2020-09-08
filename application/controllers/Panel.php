<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Facebook/autoload.php');
require_once('Facebook/PersistentData/PersistentDataInterface.php');
require_once('Facebook/PersistentData/FacebookSessionPersistentDataHandler.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/Exceptions/FacebookSDKException.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/Helpers/FacebookRedirectLoginHelper.php');
require_once('Facebook/Exceptions/FacebookAuthorizationException.php');
require_once('Facebook/GraphNodes/Collection.php');
require_once('Facebook/GraphNodes/GraphNode.php');
require_once('Facebook/GraphNodes/GraphObject.php');
require_once('Facebook/GraphNodes//GraphUser.php');
require_once('Facebook/GraphNodes//GraphSessionInfo.php');
require_once('Facebook/Authentication/AccessToken.php');
require_once('Facebook/HttpClients/FacebookCurl.php');
require_once('Facebook/HttpClients/FacebookHttpClientInterface.php');
require_once('Facebook/HttpClients/FacebookCurlHttpClient.php');

// load library class
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookCurl;



class Panel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function panel()
    {
        $this->load->view('frontend/panel');
    }

	public function index()
	{
		$data['message'] = '';
		if ($this->input->post()) {
			$data = [
				'email'	=> $this->input->post('email',true),
				'password'	=> md5($this->input->post('password',true))
			];
			if ($idUser = $this->backend->login_pemilik($data)) {
				if ($this->input->post('remember')) {
					setcookie('user', $this->input->post('email'));
					setcookie('pass', $this->input->post('password'));
				}
				$this->session->set_userdata('userId',$idUser->id_pemilik);
				redirect('kontrakan','refresh');
			}else{
				$data['message'] = 'Email atau Password tidak ditemukan';
			}
		}
		if (isset($this->input->cookie()['user'])) {
			$data['user'] = $this->input->cookie()['user'];
			$data['pass'] = $this->input->cookie()['pass'];
		}
		$this->load->view('backend/login',$data);

	}
	public function register()
	{
		$this->load->view('backend/register');
	}

	public function login_facebook_user()
	{
		$app_id = '297639651219099';
        $app_secret = '90a98d2aff881303d014f9c0cc9763ac';
        $redirect_url= base_url('panel/login_facebook_user');

        // Inisialisasi helper facebook
        FacebookSession::setDefaultApplication($app_id, $app_secret);
        $helper = new FacebookRedirectLoginHelper($redirect_url);
        $sess = $helper->getSessionFromRedirect();

        // 3. cek validasi akun pengguna
        if($this->session->userdata('fb_token'))
        {
            $sess = new FacebookSession($this->session->userdata('fb_token'));
            
            try
            {
            	$sess->Validate($id, $secret);
            }
            catch(FacebookAuthorizationException $e)
            {
            	print_r($e);
            }
        }
        $this->data['loggedin'] = FALSE;
        // login url
        $this->data['login_url'] = $helper->getLoginUrl(array('email'));
        
        // 4. jika fb session ada maka buat session pengguna
        if(isset($sess))
        {
        	$this->session->set_userdata('fb_token', $sess->getToken());
        	$request = new FacebookRequest($sess, 'GET', '/me');
        	$response = $request->execute();
        	$graph = $response->getGraphObject(GraphUser::classname());
            $sess_data = array(
                'id' => $graph->getId(),
            	'name' => $graph->getName(),
            	'email' => $graph->getProperty('email'),
            	'image' => 'https://graph.facebook.com/'.$graph->getId().'/picture?width=50',
            	'loggedin' => TRUE
            );
            $this->session->set_userdata($sess_data);
            
            redirect('panel/panel');
        }
        
        $this->load->view('frontend/panel', $this->data);

	}

    public function fb_login()
    {
        $fb = new \Facebook\Facebook([
          'app_id' => '297639651219099',
          'app_secret' => '90a98d2aff881303d014f9c0cc9763ac',
          'default_graph_version' => 'v2.10',
          //'default_access_token' => '{access-token}', // optional
        ]);

        // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
        //   $helper = $fb->getRedirectLoginHelper();
        //   $helper = $fb->getJavaScriptHelper();
        //   $helper = $fb->getCanvasHelper();
        //   $helper = $fb->getPageTabHelper();

        try {
          // Get the \Facebook\GraphNodes\GraphUser object for the current user.
          // If you provided a 'default_access_token', the '{access-token}' is optional.
          $response = $fb->get('/me', '{access-token}');
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }

        $me = $response->getGraphUser();
        echo 'Logged in as ' . $me->getName();
    }

	public function logout()
	{
		session_destroy();
		redirect('panel','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */