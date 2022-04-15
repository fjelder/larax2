<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

function getFileJson($file, $ext = 'json')
{
	$path = config('set.files').'/'.$file.'.'.$ext;
	if (Storage::disk('local')->exists($path))
	{
		return json_decode(Storage::disk('local')->get($path), true);
	}
	return false;
}
function getStudyContract($id)
{
	$listOfStudy = getFileJson('contract-study');
	if(isset($listOfStudy))
		return $listOfStudy[$id];
	else
		return false;
}
function getStageContract($id)
{
	$listOfStage = getFileJson('contract-stage');
	if(isset($listOfStage))
		return $listOfStage[$id];
	else
		return false;
}
function getContractPrefix($contract)
{
	if($contract instanceof App\Models\Contract)
		return 'ERG/'.$contract->id.'/'.$contract->created_at->format('Y').'/'.$contract->prefix;
	else
		return false;
}
