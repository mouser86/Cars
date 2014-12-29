<?php 

function rawDataParser($rawData = false)
{
	if ($rawData)
	{
		$dataString = "";
		$files = scandir($rawData);
		foreach ($files as $file)
		{
			if (is_file($rawData."/".$file))
			{
				$data = file_get_contents($rawData."/".$file);
				//strip all comments 
				$data = preg_replace('/\/\*.+?\*\/|\/\/.*(?=[\n\r])/m', '', $data);
				
				//strip var, put variable between quotes and ; and insert comma.
				$data = preg_replace("/var(.+?) \=/s", ("\"$1\" :"), trim($data));
				$data = preg_replace("/;/", ",", $data);
				

				//append to $dataString and remove last ,
				$dataString .= ",".substr($data, 0, strlen($data)-1 );
			}
		}
		
		return "{".substr($dataString, 1)."}";
	}
	else
	{
		return false;
	}
}

	$taxDataObject = json_decode(rawDataParser("data/js-files"), true));
?>
