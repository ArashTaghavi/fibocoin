@extends('layouts.site')
@section('content')
    <section id="questions" style="background: #f5f9fc" class="feature-area section-big">
        <div class="container">
            <div class="section-title">
                <h2 class="title-class">سوالات متداول</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon glyphicon-minus">
                            </span>ﻓﯾﺑو ﮐوﯾن ﭼﮕوﻧﮫ ﮐﺎر ﻣﯾﮑﻧد ؟</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <strong> مراحل خرید و فروش به شرح زیر است:
                                    </strong>
                                    - ﻓروﺷﻧده و ﯾﺎ ﺧرﯾدار ﭘس از ﺛﺑت ﻧﺎم و اﺣراز ھوﯾت،
                                    ﭘﯾﺷﻧﮭﺎد ﺧرﯾد ﯾﺎ ﻓروش ﺧود را ﺛﺑت ﻣﯽ ﮐﻧﻧد.
                                    <br>
                                    - اﻓرادی ﮐﮫ ﻗﺻد ﺧرﯾد ﯾﺎ ﻓروش دارﻧد ﭘس از
                                    ﺛﺑت ﻧﺎم و اﺣراز ھوﯾت ﻣﯽ ﺗواﻧﻧد از ﺑﯾن ﭘﯾﺷﻧﮭﺎدات ﭘﯾﺷﻧﮭﺎد ﻣورد ﻧظر ﺧود را اﻧﺗﺧﺎب ﮐرده
                                    و درﺧواﺳت ﺧرﯾد ﯾﺎ ﻓروش ﺧود را ﺛﺑت ﮐﻧﻧد. . وارﯾز ﻣﯽ ﮐﻧد «ﻓﯾﺑو ﮐوﯾن»
                                    <br>
                                    - در اﯾن ﻣرﺣﻠﮫ ﭘس
                                    از ﺗﺎﺋﯾد ﻓروﺷﻧده، ﺧرﯾدار ﻣﺑﻠﻎ رﯾﺎﻟﯽ ﻣﻌﺎﻣﻠﮫ را ﺑﮫ ﺣﺳﺎب -
                                    <br>
                                    ﭘس از وارﯾز وﺟﮫ، ﻓروﺷﻧده ارز
                                    ﻣﺟﺎزی را ﺑﮫ واﻟت ﺧرﯾدار اﻧﺗﻘﺎل داده و ﻟﯾﻧﮏ ﺗراﮐﻧش را ﺛﺑت ﻣﯽ ﮐﻧد.
                                    <br>
                                    - ﭘس از ﺗﺎﺋﯾد
                                    اﻧﺗﻘﺎل ارز دﯾﺟﯾﺗﺎل، ﻣﺑﻠﻎ رﯾﺎﻟﯽ ﺑﮫ ﺣﺳﺎب ﻓروﺷﻧده وارﯾز ﻣﯽ ﮔردد.

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="glyphicon glyphicon glyphicon-plus">
                            </span>ﻓﯾﺑو ﮐوﯾن ﭼﮕوﻧﮫ اﻣﻧﯾت را ﺗﺿﻣﯾن ﻣﯾﮑﻧد ؟</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﻣﺑﻠﻐﯽ ﮐﮫ ﺧرﯾدار آﻧﻼﯾن وارﯾز ﻣﯽ ﮐﻧد ﺗﺎ زﻣﺎن ﺗﺎﺋﯾد اﻧﺗﻘﺎل ارز دﯾﺟﯾﺗﺎل از طرف
                                        ﻓروﺷﻧده ﺑﮫ واﻟت )ﮐﯾف ﭘول اﻟﺗروﻧﯾﮑﯽ ( ﺧرﯾدار، ﻧزد ﻣﺎ ﺑﮫ اﻣﺎﻧت ﺑﺎﻗﯽ ﻣﯽ ﻣﺎﻧد و اﮔر
                                        ﺑﮫ ھر دﻟﯾﻠﯽ ﻓروﺷﻧده اﻧﺗﻘﺎل را اﻧﺟﺎم ﻧدھد اﯾن ﻣﺑﻠﻎ ﺑﮫ ﺣﺳﺎب ﺧرﯾدار اﺳﺗرداد ﺧواھد
                                        ﺷد .از طرﻓﯽ از آﻧﺟﺎ ﮐﮫ ﻗﺑل از اﻧﺗﻘﺎل ارز دﯾﺟﯾﺗﺎل ﺧرﯾدار ﻣﺑﻠﻎ رﯾﺎﻟﯽ آن را ﺑﮫ ﺣﺳﺎب
                                        ﻣﺎ وارﯾز ﮐرده اﺳت، ﻓروﺷﻧده ﻧﯾز ﺑﺎ اطﻣﯾﻧﺎن ﺧﺎطر ﻣﯽ ﺗواﻧد اﻧﺗﻘﺎل را اﻧﺟﺎم دھد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="glyphicon glyphicon-plus">
                            </span>ﭼرا ﻓﯾﺑو ﮐوﯾن ﻧﻣﺎد اﻋﺗﻣﺎد ﻧدارد ؟</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﻣﺗﺎﺳﻔﺎﻧﮫ طﺑق اﻋﻼم ﻣرﮐز ﺗوﺳﻌﮫ ﺗﺟﺎرت اﻟﮑﺗروﻧﯾﮑﯽ در ﺣﺎل ﺣﺎﺿر و ﺗﺎ زﻣﺎن ﺗدوﯾن ﻗواﻧﯾن
                                        ﺣوزه ارزھﺎی دﯾﺟﯾﺗﺎل، ﺑﮫ ﺳﺎﯾﺗﮭﺎی ﻓﻌﺎل در زﻣﯾﻧﮫ ﻣﺑﺎدﻻت ارزھﺎی دﯾﺟﯾﺗﺎل، ای ﻧﻣﺎد
                                        ﺗﻌﻠق ﻧﻣﯽ ﮔﯾرد .اﻣﺎ ﺗﯾم ﺣﻘوﻗﯽ ﻓﯾﺑو ﮐوﯾن ھﻣﭼﻧﺎن ﭘﯾﮕﯾر اﺧذ ﻣﺟوزات ﻻزم ھﺳﺗﻧد .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        ﻣدارک ﻣورد ﻧﯾﺎز ﺑرای اﺣراز ھوﯾت ﭼﯾﺳت ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﺗﻣﺎﻣﯽ ﮐﺎرﺑران ﺟﮭت ﺧرﯾد و ﻓروش در ﺳﺎﻣﺎﻧﮫ ﺑﺎﯾد ﻣراﺣل اﺣراز ھوﯾت ﺷﺎﻣل ارﺳﺎل ﻣدارک
                                        ﺷﻧﺎﺳﺎﯾﯽ، ﺗﺎﺋﯾد ﺣﺳﺎب ﺑﺎﻧﮑﯽ، ﺷﻣﺎره ھﻣراه و ﺷﻣﺎره ﺗﻠﻔن ﺛﺎﺑت را طﯽ ﮐﻧﻧد .اﯾن ﻣراﺣل
                                        ﺗوﺳط ھر ﮐﺎرﺑر ﻓﻘط ﯾﮏ ﺑﺎر طﯽ ﻣﯾﺷود .ﻣﺗﺎﺳﻔﺎﻧﮫ ﺟﮭت ﺗﺎﻣﯾن اﻣﻧﯾت و ﭘﯾش ﮔﯾری از ﺳوء
                                        اﺳﺗﻔﺎده ھﺎی اﺣﺗﻣﺎﻟﯽ، اﻧﺟﺎم ﻣراﺣل اﺣراز ھوﯾت ﻏﯾر ﻗﺎﺑل ﭼﺷم ﭘوﺷﯽ اﺳت.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        ﮐﺎرﻣزد ﺧدﻣﺎت ﻓﯾﺑوﮐوﯾن ﭼﻘدر اﺳت ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        . )ﻧﯾم درﺻد (از ھر ﯾﮏ از طرﻓﯾن ﻣﻌﺎﻣﻠﮫ ﺑﮫ ﻋﻧوان ﮐﺎرﻣزد ﮐﺳر ﻣﯽ ﮔردد ۰٫۵٪ ﺑﺎﺑت ھر
                                        ﻣﻌﺎﻣﻠﮫ ﻣوﻓق

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        ﺗﻌﯾﯾن ﻗﯾﻣت ھﺎی ﭘﯾﺷﻧﮭﺎدی ﭼﮕوﻧﮫ اﺳت ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>ﻣﺎ ھﯾﭻ ﮔوﻧﮫ دﺧﺎﻟﺗﯽ در ﺗﻌﯾﯾن ﻗﯾﻣت ارزھﺎی دﯾﺟﯾﺗﺎﻟﯽ ﮐﮫ ﺑرای ﻓروش ﺛﺑت ﻣﯽ ﺷوﻧد ﻧدارﯾم
                                        و اﯾن ﻓروﺷﻧده اﺳت ﮐﮫ ﺗﻌﯾﯾن ﻣﯽ ﮐﻧد ﺑﺎ ﭼﮫ ﻗﯾﻣﺗﯽ ﻣﯽ ﺧواھد ارز دﯾﺟﯾﺗﺎل ﺧود را
                                        ﺑﻔروﺷد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        اﻧﺟﺎم ﺗﺳوﯾﮫ ﺣﺳﺎب و وارﯾز وﺟﮫ ﺑﮫ ﻓروﺷﻧده ﭼﻘدر زﻣﺎن ﻣﯾﺑرد ؟
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﭘس از اﻧﺟﺎم ھر ﺗراﮐﻧش ﻣوﻓق ﻣﻌﺎدل ﻣﺑﻠﻎ ﻓروش ﻣﻧﮭﺎی ﮐﺎرﻣزد ﻓﯾﺑوﮐوﯾن در ﺣﺳﺎب ﮐﺎرﺑری
                                        ﻓروﺷﻧده ﺷﺎرژ ﺧواھد ﺳﺎﻋت ﺑﮫ ۲۴ﺷد و ﺑﻧﺎ ﺑﮫ درﺧواﺳت ﻓروﺷﻧده و ﺑﺎ ﺗوﺟﮫ ﺑﮫ ﻗواﻧﯾن
                                        ﺑﺎﻧﮑﯽ ﺟﺎری ﮐﺷور ﻣﺑﻠﻎ ﻣورد ﻧظر ﺣداﮐﺛر طﯽ ﺣﺳﺎب ﻓروﺷﻧده وارﯾز ﺧواھد ﺷد . ) ﺑرای
                                        ﮐﺎرﺑران اﯾراﻧﯽ ﺗﺳوﯾﮫ ﺣﺳﺎب در روز ھﺎی ﺗﻌطﯾل اﻧﺟﺎم ﻧﻣﯾﮕردد (
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        اﮔر ﭘس از وارﯾز وﺟﮫ ﺗوﺳط ﺧرﯾدار ﻓروﺷﻧده اﻧﺗﻘﺎل را اﻧﺟﺎم ﻧدھد ﭼﮫ ؟ </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﺳﻔﺎرش ﻟﻐو ﺷده و ﻣﺑﻠﻎ ﭘرداﺧﺗﯽ ﺗوﺳط ﺧرﯾدار اﺳﺗرداد ﺧواھد ﺷد ھﻣﭼﻧﯾن ﺣﺳﺎب ﮐﺎرﺑری
                                        ﻓروﺷﻧده در ﻓﯾﺑو ﮐوﯾن ﻣﺳدود ﻣﯾﮕردد .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseNone">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        آﯾﺎ اﻣﮑﺎن ﭘرداﺧت آﻓﻼﯾن وﺟود دارد ؟ </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﺗﻧﮭﺎ ﺑﺎ ھﻣﺎھﻧﮕﯽ واﺣد ﭘﺷﺗﯾﺑﺎﻧﯽ ﻓﯾﺑو ﮐوﯾن اﻣﮑﺎن ﭘرداﺧت ﺑﺻورت ﮐﺎرت ﺑﮫ ﮐﺎرت و ﯾﺎ
                                        ﺳﺎﯾر روﺷﮭﺎی ﺑﺎﻧﮑﯽ ﻣﯾﺳر اﺳت
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        آﯾﺎ ﻓﯾﺑوﮐوﯾن ﺧرﯾد و ﻓروش ارز ھﺎی دﯾﺟﯾﺗﺎل اﻧﺟﺎم ﻣﯾدھد ؟ </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        ﻓﯾﺑوﮐوﯾن ﺑﮫ ھﯾﭻ ﻋﻧوان ﺧرﯾد و ﻓروش ارزھﺎی دﯾﺟﯾﺗﺎل را اﻧﺟﺎم ﻧداده و ﺗﻧﮭﺎ ﺳﺎﻣﺎﻧﮫ
                                        اﯾﺟﺎد ارﺗﺑﺎط ﻣﺳﺗﻘﯾم ﺑﯾن ﻣﻌﺎﻣﻠﮫ ﮔران ارزھﺎی دﯾﺟﯾﺗﺎل و ﺗﺎﻣﯾن ﮐﻧﻧده ﺷراﯾط ﻣﻌﺎﻣﻠﮫ
                                        اﻣن ﻣﯾﺑﺎﺷد .
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('end-script')
    <script>
        $(document).ready(function () {
            $('li.active').removeClass('active');
        });
    </script>
@stop