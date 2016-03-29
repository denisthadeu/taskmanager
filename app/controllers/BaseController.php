<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function uploadImage($img, $folder)
	{
                $destinationPath = "uploads/$folder/";
                $filename = $img->getClientOriginalName();
                $originalname = $filename;
                $i = 1;
                while(file_exists($destinationPath . $filename)) {
                	$filename = $i . '_' . $originalname;
                	$i++;
                }
                $upload_success = $img->move($destinationPath, $filename);
                if ($upload_success) {
        	        return array('filename' => $filename, 'destinationPath' => $destinationPath);
                }
                else {
        	       return false;
                }
	}

}
