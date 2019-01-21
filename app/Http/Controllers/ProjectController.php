<?php

namespace App\Http\Controllers;

use App\LaporanAkhir;
use App\LaporanAntara;
use App\LaporanDraftAkhir;
use App\LaporanPendahuluan;
use App\MasterDataLaporan;
use App\project;
use App\ResultProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=project::all();
        return view('project.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var  $data */
        $data=new Project();
        $data->name=$request->get('name');
        $data->type_project= 0;
        $data->start_date=$request->get('start_date');
        $data->notes=$request->get('notes');
        $data->save();

        $id = $data->getAttributes()['id'];
//        return redirect('create-detail',$id);
        return redirect()->route('create-detail', ['id' => $id]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_project_detail($id)
    {
        $data_pendahuluan = MasterDataLaporan::where('laporan_type', 'PENDAHULUAN')->get();
        $data_antara = MasterDataLaporan::where('laporan_type', 'ANTARA')->get();
        $data_draft_akhir = MasterDataLaporan::where('laporan_type', 'DRAFT_AKHIR')->get();
        $data_akhir = MasterDataLaporan::where('laporan_type', 'AKHIR')->get();

        return view('project.create_detail', compact('data_pendahuluan','data_antara','data_draft_akhir','data_akhir', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItemLaporanPendahuluanAction()
    {

        $data_pendahuluan = MasterDataLaporan::where('laporan_type', 'PENDAHULUAN')->get();

        return view('project.add_item_laporan_pendahuluan', compact('data_pendahuluan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItemLaporanAntaraAction()
    {
        $data_antara = MasterDataLaporan::where('laporan_type', 'ANTARA')->get();

        return view('project.add_item_laporan_antara', compact('data_antara'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItemLaporanDraftAkhirAction()
    {
        $data_draft_akhir = MasterDataLaporan::where('laporan_type', 'DRAFT_AKHIR')->get();

        return view('project.add_item_laporan_draft_akhir', compact('data_draft_akhir'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItemLaporanAkhirAction()
    {
        $data_akhir = MasterDataLaporan::where('laporan_type', 'AKHIR')->get();

        return view('project.add_item_laporan_akhir', compact('data_akhir'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDetailAction(Request $request)
    {

        $id = $request->get('id');

        foreach ($request->get('item_pendahuluan') as $key=>$value) {
//            $data = MasterDataLaporan::where('id', $value)->get();
            $dataPendahuluan =new LaporanPendahuluan();
            $dataPendahuluan->project_id = $id;
            $dataPendahuluan->activity_id= '1';
            $dataPendahuluan->activity_name= $value;
            $dataPendahuluan->activity_desc = $request->get('desc_pendahuluan')[$key];
            $dataPendahuluan->duration_date = $request->get('duration_pendahuluan')[$key];
            $dataPendahuluan->pinalty = $request->get('pinalti_pendahuluan')[$key];


            $array = explode(' ', $value);
            $serializedArr = serialize($array);

            $dataPendahuluan->keywords = $serializedArr;
            $dataPendahuluan->save();
        }

        foreach ($request->get('item_antara') as $key=>$value) {
//            $data = MasterDataLaporan::where('id', $value)->get();
            $dataAntara =new LaporanAntara();
            $dataAntara->project_id = $id;
            $dataAntara->activity_id= '1';
            $dataAntara->activity_name= $value;
            $dataAntara->activity_desc = $request->get('desc_antara')[$key];
            $dataAntara->duration_date = $request->get('duration_antara')[$key];
            $dataAntara->pinalty = $request->get('pinalti_antara')[$key];
            $array = explode(' ', $value);
            $serializedArr = serialize($array);

            $dataAntara->keywords = $serializedArr;
            $dataAntara->save();
        }

        foreach ($request->get('item_draft_akhir') as $key=>$value) {
//            $data = MasterDataLaporan::where('id', $value)->get();
            $dataDraftAkhir =new LaporanDraftAkhir();
            $dataDraftAkhir->project_id = $id;
            $dataDraftAkhir->activity_id = '1';
            $dataDraftAkhir->activity_name= $value;
            $dataDraftAkhir->activity_desc = $request->get('desc_draft_akhir')[$key];
            $dataDraftAkhir->duration_date = $request->get('duration_draft_akhir')[$key];
            $dataDraftAkhir->pinalty = $request->get('pinalti_draft_akhir')[$key];

            $array = explode(' ', $value);
            $serializedArr = serialize($array);

            $dataDraftAkhir->keywords = $serializedArr;
            $dataDraftAkhir->save();
        }

        foreach ($request->get('item_akhir') as $key=>$value) {
//            $data = MasterDataLaporan::where('id', $value)->get();
            $dataAkhir =new LaporanAkhir();
            $dataAkhir->project_id = $id;
            $dataAkhir->activity_id = '1';
            $dataAkhir->activity_name= $value;
            $dataAkhir->activity_desc = $request->get('desc_akhir')[$key];
            $dataAkhir->duration_date = $request->get('duration_akhir')[$key];
            $dataAkhir->pinalty = $request->get('pinalti_akhir')[$key];

            $array = explode(' ', $value);
            $serializedArr = serialize($array);

            $dataAkhir->keywords = $serializedArr;
            $dataAkhir->save();
        }

        return redirect()->route('process-detail', ['id' => $id]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loading($id)
    {

        $data_pendahuluan = LaporanPendahuluan::where('project_id', $id)->get();
        $data_antara = LaporanAntara::where('project_id', $id)->get();
        $data_draft_akhir = LaporanDraftAkhir::where('project_id', $id)->get();
        $data_akhir = LaporanAkhir::where('project_id', $id)->get();
        $total_point = 0;
        $match_neighbour = [];


        //pencocokan data pendahuluan dengan semua neighbour
        foreach ($data_pendahuluan as $key=>$value) {
            $total_point++;
            $dataCheck = unserialize($value->keywords);
            $all_data_pendahuluan = LaporanPendahuluan::where('id', '!=', $value->id)->get();

            foreach ($all_data_pendahuluan as $data) {
                $data_on_db = unserialize($data->keywords);
                $result = array_intersect($data_on_db, $dataCheck);
                $score = count($result);

                $match_neighbour[] = [
                    'project' => $data->id,
                    'score' => $score
                ];
            }

            //Collect hasil pencocokan dengan semua parameter
            $collectedData = array();
            foreach ($match_neighbour as $value2) {
                if (!isset($collectedData[$value['project']]))
                    $collectedData[$value2['project']] = $value2['score'];
                else
                    $collectedData[$value2['project']] += $value2['score'];
            }

            //get data dari yang paling sesuai (ambil 3 neighbour)
            arsort($collectedData);
            $sumOfNeighbour = 0;
            $limit = 3;
            foreach ($collectedData as $key3=>$value3) {
                if ($sumOfNeighbour < $limit) {

                    $percentage = round(($value3/ count($dataCheck)) * 100);
                    $selected_laporan_pendahuluan = LaporanPendahuluan::where('id', $key3)->get();

                    $resultProject =new ResultProject();
                    $resultProject->project_id = $value->id;
                    $resultProject->match_pendahuluan= $key3;
                    $resultProject->persentase = $percentage;
                    $resultProject->point_match = $value3;
                    $resultProject->activity_name = $selected_laporan_pendahuluan[0]->activity_name;
                    $resultProject->activity_desc = $selected_laporan_pendahuluan[0]->activity_desc;
                    $resultProject->activity_risk = $selected_laporan_pendahuluan[0]->activity_risk;
                    $resultProject->activity_solution = $selected_laporan_pendahuluan[0]->activity_solution;
                    $resultProject->save();

                }
                $sumOfNeighbour++;
            }
        }

        $match_neighbour = [];


        //pencocokan data antara dengan semua neighbour
        foreach ($data_antara as $key=>$value) {
            $total_point++;
            $dataCheck = unserialize($value->keywords);
            $all_data_antara = LaporanAntara::where('id', '!=', $value->id)->get();

            foreach ($all_data_antara as $data) {
                $data_on_db = unserialize($data->keywords);
                $result = array_intersect($data_on_db, $dataCheck);
                $score = count($result);

                $match_neighbour[] = [
                    'project' => $data->id,
                    'score' => $score
                ];
            }

            //Collect hasil pencocokan dengan semua parameter
            $collectedData = array();
            foreach ($match_neighbour as $value2) {
                if (!isset($collectedData[$value2['project']]))
                    $collectedData[$value2['project']] = $value2['score'];
                else
                    $collectedData[$value2['project']] += $value2['score'];
            }

            //get data dari yang paling sesuai (ambil 3 neighbour)
            arsort($collectedData);
            $sumOfNeighbour = 0;
            $limit = 3;
            foreach ($collectedData as $key3=>$value3) {
                if ($sumOfNeighbour < $limit) {

                    $percentage = round(($value3 / count($dataCheck)) * 100);
                    $selected_laporan_antara = LaporanAntara::where('id', $key3)->get();

                    $resultProject =new ResultProject();
                    $resultProject->project_id = $value->id;
                    $resultProject->match_antara= $key3;
                    $resultProject->persentase = $percentage;
                    $resultProject->point_match = $value3;
                    $resultProject->activity_name = $selected_laporan_antara[0]->activity_name;
                    $resultProject->activity_desc = $selected_laporan_antara[0]->activity_desc;
                    $resultProject->activity_risk = $selected_laporan_antara[0]->activity_risk;
                    $resultProject->activity_solution = $selected_laporan_antara[0]->activity_solution;
                    $resultProject->save();
                }

                $sumOfNeighbour++;

            }
        }

        $match_neighbour = [];

        //pencocokan data draft akhir dengan semua neighbour
        foreach ($data_draft_akhir as $key=>$value) {
            $total_point++;
            $dataCheck = unserialize($value->keywords);
            $all_data_draft_akhir = LaporanDraftAkhir::where('id', '!=', $value->id)->get();

            foreach ($all_data_draft_akhir as $data) {
                $data_on_db = unserialize($data->keywords);
                $result = array_intersect($data_on_db, $dataCheck);
                $score = count($result);

                $match_neighbour[] = [
                    'project' => $data->id,
                    'score' => $score
                ];
            }

            //Collect hasil pencocokan dengan semua parameter
            $collectedData = array();
            foreach ($match_neighbour as $value2) {
                if (!isset($collectedData[$value2['project']]))
                    $collectedData[$value2['project']] = $value2['score'];
                else
                    $collectedData[$value2['project']] += $value2['score'];
            }

            //get data dari yang paling sesuai (ambil 3 neighbour)
            arsort($collectedData);
            $sumOfNeighbour = 0;
            $limit = 3;
            foreach ($collectedData as $key3=>$value3) {
                if ($sumOfNeighbour < $limit) {

                    $percentage = round(($value3 / count($dataCheck)) * 100);
                    $selected_laporan_draft_akhir = LaporanDraftAkhir::where('id', $key3)->get();

                    $resultProject =new ResultProject();
                    $resultProject->project_id = $value->id;
                    $resultProject->match_draft_akhir= $key3;
                    $resultProject->persentase = $percentage;
                    $resultProject->point_match = $value3;
                    $resultProject->activity_name = $selected_laporan_draft_akhir[0]->activity_name;
                    $resultProject->activity_desc = $selected_laporan_draft_akhir[0]->activity_desc;
                    $resultProject->activity_risk = $selected_laporan_draft_akhir[0]->activity_risk;
                    $resultProject->activity_solution = $selected_laporan_draft_akhir[0]->activity_solution;
                    $resultProject->save();

                }
                $sumOfNeighbour++;

            }

        }

        $match_neighbour = [];


        //pencocokan data akhir dengan semua neighbour
        foreach ($data_akhir as $key=>$value) {
            $total_point++;
            $dataCheck = unserialize($value->keywords);
            $all_data_akhir = LaporanAkhir::where('id', '!=', $value->id)->get();

            foreach ($all_data_akhir as $data) {
                $data_on_db = unserialize($data->keywords);
                $result = array_intersect($data_on_db, $dataCheck);
                $score = count($result);

                $match_neighbour[] = [
                    'project' => $data->id,
                    'score' => $score
                ];
            }

            //Collect hasil pencocokan dengan semua parameter
            $collectedData = array();
            foreach ($match_neighbour as $value2) {
                if (!isset($collectedData[$value2['project']]))
                    $collectedData[$value2['project']] = $value2['score'];
                else
                    $collectedData[$value2['project']] += $value2['score'];
            }

            //get data dari yang paling sesuai (ambil 3 neighbour)
            arsort($collectedData);
            $sumOfNeighbour = 0;
            $limit = 3;
            foreach ($collectedData as $key3=>$value3) {
                if ($sumOfNeighbour < $limit) {

                    $percentage = round(($value3 / count($dataCheck)) * 100);
                    $selected_laporan_akhir = LaporanAkhir::where('id', $key3)->get();

                    $resultProject =new ResultProject();
                    $resultProject->project_id = $value->id;
                    $resultProject->match_akhir= $key3;
                    $resultProject->persentase = $percentage;
                    $resultProject->point_match = $value3;
                    $resultProject->activity_name = $selected_laporan_akhir[0]->activity_name;
                    $resultProject->activity_desc = $selected_laporan_akhir[0]->activity_desc;
                    $resultProject->activity_risk = $selected_laporan_akhir[0]->activity_risk;
                    $resultProject->activity_solution = $selected_laporan_akhir[0]->activity_solution;
                    $resultProject->save();

                }
                $sumOfNeighbour++;
            }
        }

        return view('project.loading', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loading2($id)
    {

        $match_neighbour = [];
        $data_pendahuluan = LaporanPendahuluan::where('project_id', $id)->get();
        $data_antara = LaporanAntara::where('project_id', $id)->get();
        $data_draft_akhir = LaporanDraftAkhir::where('project_id', $id)->get();
        $data_akhir = LaporanAkhir::where('project_id', $id)->get();
        $total_point = 0;

        //pencocokan data pendahuluan dengan semua neighbour
        foreach ($data_pendahuluan as $key=>$value) {
            $total_point++;
            $activity = $value->activity_id;
            $neighbour = LaporanPendahuluan::where('activity_id', $activity)->where('project_id', '!=', $id)->get();

            foreach ($neighbour as $key_neighbour=>$value_neighbour) {
                $match_neighbour[] = [
                    'project' => $value_neighbour->project_id,
                    'score' => +1

                ];
            }
        }

        //pencocokan data antara dengan semua neighbour
        foreach ($data_antara as $key=>$value) {
            $total_point++;
            $activity = $value->activity_id;
            $neighbour = LaporanAntara::where('activity_id', $activity)->where('project_id', '!=', $id)->get();

            foreach ($neighbour as $key_neighbour=>$value_neighbour) {
                $match_neighbour[] = [
                    'project' => $value_neighbour->project_id,
                    'score' => +1

                ];
            }
        }

        //pencocokan data draft akhir dengan semua neighbour
        foreach ($data_draft_akhir as $key=>$value) {
            $total_point++;
            $activity = $value->activity_id;
            $neighbour = LaporanDraftAkhir::where('activity_id', $activity)->where('project_id', '!=', $id)->get();

            foreach ($neighbour as $key_neighbour=>$value_neighbour) {
                $match_neighbour[] = [
                    'project' => $value_neighbour->project_id,
                    'score' => +1

                ];
            }
        }

        //pencocokan data akhir dengan semua neighbour
        foreach ($data_akhir as $key=>$value) {
            $total_point++;
            $activity = $value->activity_id;
            $neighbour = LaporanAkhir::where('activity_id', $activity)->where('project_id', '!=', $id)->get();

            foreach ($neighbour as $key_neighbour=>$value_neighbour) {
                $match_neighbour[] = [
                    'project' => $value_neighbour->project_id,
                    'score' => +1

                ];
            }
        }

        //Collect hasil pencocokan dengan semua parameter
        $collectedData = array();
        foreach ($match_neighbour as $value) {
            if (!isset($collectedData[$value['project']]))
                $collectedData[$value['project']] = $value['score'];
            else
                $collectedData[$value['project']] += $value['score'];
        }

        //get data dari yang paling sesuai (ambil 3 neighbour)
        ksort($collectedData);
        $sumOfNeighbour = 0;
        $limit = 3;

        foreach ($collectedData as $key=>$value) {
            if ($sumOfNeighbour < $limit) {

                $percentage = round(($value / $total_point) * 100);
                $resultProject =new ResultProject();
                $resultProject->project_id = $id;
                $resultProject->match_akhir= $key;
                $resultProject->persentase = $percentage;
                $resultProject->point_match = $value;
                $resultProject->save();

            }
            $sumOfNeighbour++;
        }

        return view('project.loading', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result($id)
    {
        $data_project = project::where('id', $id)->get();
        $data_pendahuluan = LaporanPendahuluan::where('project_id', $id)->get();
        $data_antara = LaporanAntara::where('project_id', $id)->get();
        $data_draft_akhir = LaporanDraftAkhir::where('project_id', $id)->get();
        $data_akhir = LaporanAkhir::where('project_id', $id)->get();

        $data_matching = ResultProject::where('project_id', $id)->orderByDesc('persentase')->get();

        foreach ($data_matching as $key=>$project_match) {
            $match_project_id = $project_match->match_project_id;

            $data_project_match[$key] = project::where('id', $match_project_id)->get();

            $data_pendahuluan_match[$key][] = LaporanPendahuluan::where('project_id', $match_project_id)->get();
            $data_antara_match[$key][] = LaporanAntara::where('project_id', $match_project_id)->get();
            $data_draft_akhir_match[$key][] = LaporanDraftAkhir::where('project_id', $match_project_id)->get();
            $data_akhir_match[$key][] = LaporanAkhir::where('project_id', $match_project_id)->get();
        }


        return view('project.result', compact('id', 'data_project', 'data_pendahuluan', 'data_antara', 'data_draft_akhir', 'data_akhir','data_matching' , 'data_project_match', 'data_pendahuluan_match', 'data_antara_match', 'data_draft_akhir_match', 'data_akhir_match'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_project = project::where('id', $id)->get();

        $data_pendahuluan = DB::table('laporan_pendahuluan')
            ->join('result_project', 'laporan_pendahuluan.id', '=', 'result_project.project_id')
            ->where('laporan_pendahuluan.project_id', $id)
            ->get();

        $data_antara = DB::table('laporan_antara')
            ->join('result_project', 'laporan_antara.id', '=', 'result_project.project_id')
            ->where('laporan_antara.project_id', $id)
            ->get();

        $data_draft_akhir= DB::table('laporan_akhir_draft')
            ->join('result_project', 'laporan_akhir_draft.id', '=', 'result_project.project_id')
            ->where('laporan_akhir_draft.project_id', $id)
            ->get();

        $data_akhir = DB::table('laporan_akhir')
            ->join('result_project', 'laporan_akhir.id', '=', 'result_project.project_id')
            ->where('laporan_akhir.project_id', $id)
            ->get();



        return view('project.project_detail', compact('id', 'data_project', 'data_pendahuluan', 'data_antara', 'data_draft_akhir', 'data_akhir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function converting()
    {

        $data_pendahuluan = LaporanPendahuluan::all();

        foreach ($data_pendahuluan as $key=> $data) {
            $activity = $data->activity_name;

            $array = explode(' ', $activity);
            $serializedArr = serialize($array);

            $laporan_pendahuluan = LaporanPendahuluan::find($data->id);
            $laporan_pendahuluan->keywords = $serializedArr;
            $laporan_pendahuluan->save();
        }

        $data_antara = LaporanAntara::all();

        foreach ($data_antara as $key=> $data) {
            $activity = $data->activity_name;

            $array = explode(' ', $activity);
            $serializedArr = serialize($array);

            $laporan_antara = LaporanAntara::find($data->id);
            $laporan_antara->keywords = $serializedArr;
            $laporan_antara->save();
        }

        $data_draft_akhir = LaporanDraftAkhir::all();

        foreach ($data_draft_akhir as $key=> $data) {
            $activity = $data->activity_name;

            $array = explode(' ', $activity);
            $serializedArr = serialize($array);

            $laporan_draft_akhir = LaporanDraftAkhir::find($data->id);
            $laporan_draft_akhir->keywords = $serializedArr;
            $laporan_draft_akhir->save();
        }

        $data_akhir = LaporanAkhir::all();

        foreach ($data_akhir as $key=> $data) {
            $activity = $data->activity_name;

            $array = explode(' ', $activity);
            $serializedArr = serialize($array);

            $laporan_akhir = LaporanAkhir::find($data->id);
            $laporan_akhir->keywords = $serializedArr;
            $laporan_akhir->save();
        }

        var_dump("success");exit;





    }
}
