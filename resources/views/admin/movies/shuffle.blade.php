@extends('layouts.admin')
@section('title', '登録された目標')

@section('content')
    <div class="container">
        <div class="row">
            <h2>What is your goal from now on?</h2>
        </div>
       
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                            <table>
                                <!-- table header -->
                                <th width="20%">目標</th>
                            </table>
                            @foreach($posts as $movies)
                                <th>{{ $cond_goal->goal }}</th>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- ランダムでメッセージを出す -->
    $ar = array("いい感じ！", "この調子でいこう！", "頑張りすぎなくていいんだよ！", "今日もできたね！");
    shuffle($ar);
    echo $ar[0];




