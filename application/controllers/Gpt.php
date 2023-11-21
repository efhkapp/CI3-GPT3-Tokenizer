<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GPT extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function index()
    {
        // Source GIT: https://github.com/CodeRevolutionPlugins/GPT-3-Encoder-PHP
        // Enable for Codeigniter 3
        // All json files are remapped in vendor/gpt3, change it in gpt3_helper.php if you wish to store in other location.
        
        // load the helper (location: application/helpers/gpt3_helper.php)
        $this->load->helper('gpt3');
        
        $prompt = "Many words map to one token, but some don't: indivisible. Unicode characters like emojis may be split into many tokens containing the underlying bytes: 🤚🏾 Sequences of characters commonly found next to each other may be grouped together: 1234567890";
        $token_array = gpt_encode($prompt);
        error_log('Token array: ' . print_r($token_array, true));
        error_log('Count: ' . count($token_array));
        $original_text = gpt_decode($token_array);
        error_log('Original text: ' . $original_text);
        
        // Print it
        echo count($token_array);
        
    }
    
}
