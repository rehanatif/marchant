<?php

namespace App\Helper;
use Storage;

class UtilityHelper{

    // SYSTEM CONFIGURATION
    public function getInputTypes()
    {
        return ['Text','Number','Email','Password','Date'];
    }

    public function getActionTypes()
    {
        return ['Add / Update','Show'];
    }

    // END SYSTEM CONFIGURATION

    public function uploadFileS3($file,$flag = true)
    {
        $location = 'test_developer';

        if(!\App::environment('local'))
        {
           $location = strtolower(str_replace(' ','_',env('APP_NAME')));
        }

        if($flag === true)
        {
            $name = uniqid() . '.' . $file->getClientOriginalExtension();

            Storage::disk('s3')->put("$location/" . $name, file_get_contents($file));

            return $name;
        }
        else // RUN TIME CREATE FILE USING CAMERA
        {
            $name = uniqid().".png";
            Storage::disk('s3')->put("$location/".$name,$file);

            return $name;
        }
    }

    public function getFileS3($file_name)
    {
        $location = 'test_developer';

        if(!\App::environment('local'))
        {
            $location = strtolower(str_replace(' ','_',env('APP_NAME')));
        }

        $disk = Storage::disk('s3');

        $adapter = Storage::disk('s3')->getDriver()->getAdapter();

        $command = $adapter->getClient()->getCommand('GetObject', [

            'Bucket' => $adapter->getBucket(),
            'Key'    => $adapter->getPathPrefix() . "$location/" . $file_name

        ]);

        $request = $adapter->getClient()->createPresignedRequest($command, '+1 minute');

        return $request->getUri();
    }

    public function uploadFile($file,$flag = true)
    {
        $location = 'test_developer';

        if(!\App::environment('local'))
        {
            $location = strtolower(str_replace(' ','_',env('APP_NAME')));
        }

        if($flag == true)
        {
            $name = uniqid() . '.' . $file->getClientOriginalExtension();

            Storage::disk('public')->put("$location/".$name, file_get_contents($file));
        }
        else // RUN TIME CREATE FILE USING CAMERA
        {
            $name = uniqid().".png";
            Storage::disk('public')->put("$location/".$name,$file);

            return $name;
        }
        
        return $name;
    }

    public function getFile($file_name)
    {
        $location = 'test_developer';

        if(!\App::environment('local'))
        {
            $location = strtolower(str_replace(' ','_',env('APP_NAME')));
        }

        return url(Storage::url("$location/".$file_name));

    }

	public function getSystemConfiguration()
	{
		return \App\Models\SystemConfiguration::first();
	}

	public function getSegment($array = [],$call_back = 'active-li')
    {
        if(in_array(\Request::segment(1),$array))
        {
            return $call_back;
        }
        else
        {
            return '';
        }
    }

    public function dateHtml($value)
    {

        return str_replace('1970-01-01', ' ', date('Y-m-d', strtotime($value)));
    }

    public function filterEmail($email)
    {
    	if (strpos($email, 'estatech') !== false) 
    	{
        	return '';
    	}
    	
    	return $email;
    }

    public function dateFormat($value)
    {

        return str_replace('01-Jan-1970', ' ', date('d-M-Y', strtotime($value)));
    
    }

    public static function getProjectTypeList()
    {
       return['Authorize Dealer','Ownership'];
    }

    public static function getProjectNatureList()
    {
        return ['Society','Apartment'];
    }

    public function getUserTypeByFlag($flag)
    {
        return \DB::table('user_types')->whereIn('flag',$flag)->get();
    }

    // S3 STORAGE FUNCTION IMAGE STORE WITH IMAGE RESIZING
    public static function uploadResizeImage($size = [100,100],$file,$updated_file = '/graphics/logo/user.png')
    {


        $file_name = '/graphics/logo/user.png';

        if(strlen(trim($file)) > 0)
        {

            if(isset($size[0]) && isset($size[1]))
            {
                $file_name = $file->getClientOriginalName();

                $img = \Image::make($file);

                $img->backup();


                $img->resize($size[0],$size[1]);

                $img->backup();


                $resource = $img->stream('png',100)->detach();

                $file_name = uniqid().$file_name;

                $path = \Storage::disk('s3')->put(
                    'test_estatech/' . $file_name,
                    $resource
                );
            }

        }
        else
        {
            if(strlen(trim($updated_file)) > 0)
            {
                $file_name =  $updated_file;
            }
            else
            {
               $file_name = '/graphics/logo/user.png';
            }
        }




        return $file_name;
    }


    public static function getStatusList()
    {
        return ['Active','Deactive'];
    }

}
