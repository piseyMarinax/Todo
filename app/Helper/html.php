<?php

# style tag with time stamp

function style_ts($path)
{
    try
    {
        $ts = '?=' . File::lastModified(public_path().$path);
    }
    catch(Exception $e)
    {
        $ts = '';
    }

    return '<link media="all" type="text/css" rel="stylesheet" href="' . $path . $ts.'">';

}

#script tag with time stamp

    function script_ts($path)
    {
        try
        {
            $ts = '?=' . File::lastModified(public_path().$path);
        }

        catch(Exception $e)
        {
            $ts = '';
        }

        return '<script src="' . $path . $ts . '"></scripts>';

    }



?>