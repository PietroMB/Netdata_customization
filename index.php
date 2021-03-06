<!DOCTYPE html>
<html lang="en">

<head>
    <title>System Monitor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/master.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<script>
    var netdataTheme = 'slate';
</script>
<script type="text/javascript" src="http://localhost:19999/dashboard.js"></script>
<script>
    // destroy charts not shown (lowers memory on the browser) I USE 24GB SO MEMORY IS NO ISSUE
    //NETDATA.options.current.destroy_on_hide = false;

    // set this to false, to always show all dimensions
    //NETDATA.options.current.eliminate_zero_dimensions = true;

    // always update the charts, even if focus is lost. THIS IS NOT ON BY DEFAULT AND CAN BE RESOURCE INTENSIVE
    NETDATA.options.current.stop_updates_when_focus_is_lost = false;

    // This will reload the page every RELOAD_EVERY minutes MINE IS SET TO 10 MINS
    //var RELOAD_EVERY = 10;
    //setTimeout(function() {
        //location.reload();
//    }, RELOAD_EVERY * 60 * 1000);
</script>

<body style="background-color:#272b30; overflow-x: hidden; overflow-y: hidden;">


    <div class="fullscreen">
      &nbsp;
    </div>
    <div class="row">
        <div class="col s4 m3">
            <div data-netdata="system.cpu" data-host="http://localhost:19999" data-decimal-digits="0" data-title="Used CPU" data-chart-library="easypiechart" data-colors="#4caf50" data-easypiechart-max-value="100" data-width="95%" data-append-options="percentage"
            data-units="%" data-height="100%" data-after="-300" data-points="300" style="margin-left: 3%"></div>
        </div>
        <div class="col s4 m3">
            <div data-netdata="system.ram" data-host="http://localhost:19999" data-dimensions="used|buffers|active|wired" data-chart-library="easypiechart" data-append-options="percentage" data-title="Used RAM" data-units="%" data-easypiechart-max-value="100" data-width="95%" data-height="100%"
            data-after="-540" data-points="540" data-colors="#DD4400">
            </div>
        </div>
        <div class="col s4 m3">
            <div data-netdata="system.swap" data-host="http://localhost:19999" data-dimensions="used" data-append-options="percentage" data-chart-library="easypiechart" data-title="Used Swap" data-units="%" data-easypiechart-max-value="100" data-before="0" data-after="-540"
            data-points="540" data-width="95%" data-colors="#ee9911" role="application"></div>
        </div>
        <div class="col s4 m3">
            <div data-netdata="net.enp37s0" data-host="http://localhost:19999" data-decimal-digits="0" data-title="Used LAN" data-chart-library="easypiechart" data-width="95%" data-colors="#01579b" data-height="100%" data-after="-300" data-points="300"></div>
        </div>
    </div>


    <div style="width: 100%; height: 24vh; text-align: center; display: inline-block;">
        <div style="width: 100%; height: calc(100% - 15px); text-align: center; display: inline-block;">
            <div data-netdata="system.cpu" data-host="http://localhost:19999" data-common-max="io" data-colors="#4caf50" data-common-min="io" data-title="Used CPU" data-legend="no" data-chart-library="dygraph" data-width="100%" data-height="90%" data-after="-300"></div>
            <div data-netdata="apps.cpu" data-host="http://localhost:19999" data-title="Apps CPU" data-legend="no" data-chart-library="dygraph" data-width="100%" data-height="90%" data-after="-300"></div>
            <div data-netdata="net.enp37s0" data-host="http://localhost:19999" data-title="Bandwidht" data-dygraph-max-value="100" data-chart-library="dygraph" data-width="100%" data-height="90%" data-after="-300" data-legend="no"></div>
        </div>
    </div>

    <div class="row">
        <div class="col s4 m3">
            <div data-netdata="system.processes" data-decimal-digits="0" data-colors="#1b5e20" data-host="http://localhost:19999" data-title="Running Processes" data-chart-library="gauge" data-width="100%" data-height="100%" data-after="-300" data-points="300"></div>
        </div>
        <div class="col s4 m3">
            <div data-netdata="system.ram" data-host="http://localhost:19999" data-dimensions="used|buffers|active|wired" data-chart-library="gauge"  data-title="Active RAM"  data-width="100%" data-gauge-max-value="16000"
            data-after="-540" data-points="540" data-colors="#4e342e">
            </div>
        </div>
        <div class="col s4 m3">
            <div data-netdata="system.io" data-host="http://localhost:19999" data-dimensions="out" data-chart-library="gauge" data-title="Disk Write" data-before="0" data-after="-540" data-points="540" data-colors="#ef6c00" role="application" class="netdata-container"></div>
        </div>
        <div class="col s4 m3">
            <div  data-netdata="system.io" data-host="http://localhost:19999" data-colors="#00796b" data-dimensions="in" data-chart-library="gauge" data-title="Disk Read" data-before="0" data-after="-540" data-points="540" role="application"></div>
        </div>
    </div>

    <!--
CPU tachimetro
                <div data-netdata="system.cpu"
                        data-host="http://localhost:19999"
                        data-decimal-digits="0"
                        data-title="Used CPU"
                        data-chart-library="gauge"
                        data-colors="#22AA99"
                        data-gauge-max-value="100"
                        data-units="%"
                        data-width="100%"
                        data-height="100%"
                        data-after="-300"
                        data-points="300"
                        ></div>
-->


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
     // var time = new Date().getTime();
     // $(document.body).bind("mousemove keypress", function(e) {
     //     time = new Date().getTime();
     // });
     //
     // function refresh() {
     //     if(new Date().getTime() - time >= 60000)
     //         window.location.reload(true);
     //     else
     //         setTimeout(refresh, 10000);
     // }
     //
     // setTimeout(refresh, 10000);
</script>
</body>

</html>
