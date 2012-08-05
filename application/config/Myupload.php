<?php

 $config['myuploads'] = array(
            'script_url' => getFullUrl().'/',
            'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']).'/assets/',
            'upload_url' => getFullUrl().'/assets/',
            'param_name' => 'files',
            // Set the following option to 'POST', if your server does not support
            // DELETE requests. This is a parameter sent to the client:
            'delete_type' => 'DELETE',
            // The php.ini settings upload_max_filesize and post_max_size
            // take precedence over the following max_file_size setting:
            'max_file_size' => null,
            'min_file_size' => 1,
            'accept_file_types' => '/.+$/i',
            // The maximum number of files for the upload directory:
            'max_number_of_files' => null,
            // Image resolution restrictions:
            'max_width' => null,
            'max_height' => null,
            'min_width' => 1,
            'min_height' => 1,
            // Set the following option to false to enable resumable uploads:
            'discard_aborted_uploads' => true,
            // Set to true to rotate images based on EXIF meta data, if available:
            'orient_image' => false,
            'image_versions' => array(
                // Uncomment the following version to restrict the size of
                // uploaded images. You can also add additional versions with
                // their own upload directories:
                /*
                'large' => array(
                    'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']).'/files/',
                    'upload_url' => $this->getFullUrl().'/files/',
                    'max_width' => 1920,
                    'max_height' => 1200,
                    'jpeg_quality' => 95
                ),
                */
                'thumbnail' => array(
                    'upload_dir' => dirname($_SERVER['SCRIPT_FILENAME']).'/assets/thumbnails/',
                    'upload_url' => getFullUrl().'/assets/thumbnails/',
                    'max_width' => 80,
                    'max_height' => 80
                )
            )
        );

 
 function getFullUrl() {
        $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
      	return
    		($https ? 'https://' : 'http://').
    		(!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
    		(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
    		($https && $_SERVER['SERVER_PORT'] === 443 ||
    		$_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
    		substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }