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
            $data = MasterDataLaporan::where('id', $value)->get();
            $dataPendahuluan =new LaporanPendahuluan();
            $dataPendahuluan->project_id = $id;
            $dataPendahuluan->activity_id= $value;
            $dataPendahuluan->activity_name= $data[0]->activity;
            $dataPendahuluan->activity_desc = $request->get('desc_pendahuluan')[$key];
            $dataPendahuluan->duration_date = $request->get('duration_pendahuluan')[$key];
            $dataPendahuluan->pinalty = $request->get('pinalti_pendahuluan')[$key];
            $dataPendahuluan->save();
        }

        foreach ($request->get('item_antara') as $key=>$value) {
            $data = MasterDataLaporan::where('id', $value)->get();
            $dataAntara =new LaporanAntara();
            $dataAntara->project_id = $id;
            $dataAntara->activity_id= $value;
            $dataAntara->activity_name= $data[0]->activity;
            $dataAntara->activity_desc = $request->get('desc_antara')[$key];
            $dataAntara->duration_date = $request->get('duration_antara')[$key];
            $dataAntara->pinalty = $request->get('pinalti_antara')[$key];
            $dataAntara->save();
        }

        foreach ($request->get('item_draft_akhir') as $key=>$value) {
            $data = MasterDataLaporan::where('id', $value)->get();
            $dataDraftAkhir =new LaporanDraftAkhir();
            $dataDraftAkhir->project_id = $id;
            $dataDraftAkhir->activity_id = $value;
            $dataDraftAkhir->activity_name= $data[0]->activity;
            $dataDraftAkhir->activity_desc = $request->get('desc_draft_akhir')[$key];
            $dataDraftAkhir->duration_date = $request->get('duration_draft_akhir')[$key];
            $dataDraftAkhir->pinalty = $request->get('pinalti_draft_akhir')[$key];
            $dataDraftAkhir->save();
        }

        foreach ($request->get('item_akhir') as $key=>$value) {
            $data = MasterDataLaporan::where('id', $value)->get();
            $dataAkhir =new LaporanAkhir();
            $dataAkhir->project_id = $id;
            $dataAkhir->activity_id = $value;
            $dataAkhir->activity_name= $data[0]->activity;
            $dataAkhir->activity_desc = $request->get('desc_akhir')[$key];
            $dataAkhir->duration_date = $request->get('duration_akhir')[$key];
            $dataAkhir->pinalty = $request->get('pinalti_akhir')[$key];
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
                $resultProject->match_project_id= $key;
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
        //
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
}
