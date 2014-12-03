var dp = new DayPilot.Calendar("dp");
dp.cssClassPrefix = "calendar_white";
dp.init();

		dp.viewType = "Week";
		dp.update();

function loadEvents() {
    DayPilot.request("backend_events.php", function(result) {
        var data = eval("(" + result.responseText + ")");
        for(var i = 0; i < data.length; i++) {
            var e = new DayPilot.Event(data[i]);                
            dp.events.add(e);
        }
    });
}

dp.onEventMoved = function (args) {
    DayPilot.request(
        "backend_move.php", 
        function(req) { // success
            var response = eval("(" + req.responseText + ")");
            if (response && response.result) {
                dp.message("Moved: " + response.message);
            }
        },
        args,
        function(req) {  // error
            dp.message("Saving failed");
        }
    );        
};

dp.onEventResized = function (args) {
    DayPilot.request(
        "backend_resize.php", 
        function(req) { // success
            var response = eval("(" + req.responseText + ")");
            if (response && response.result) {
                dp.message("Resized: " + response.message);
            }
        },
        args,
        function(req) {  // error
            dp.message("Saving failed");
        }
    );    
};
dp.onTimeRangeSelected = function (args) {
    var name = prompt("New event name:", "Event");
    dp.clearSelection();
    if (!name) return;
    var e = new DayPilot.Event({
        start: args.start,
        end: args.end,
        id: DayPilot.guid(),
        text: name
    });
    dp.events.add(e);

    args.text = name;

    DayPilot.request(
        "backend_create.php", 
        function(req) { // success
            var response = eval("(" + req.responseText + ")");
            if (response && response.result) {
                dp.message("Created: " + response.message);
            }
        },
        args,
        function(req) {  // error
            dp.message("Saving failed");
        }
    ); 
};
dp.onBeforeCellRender = function(args) {
    if (args.cell.start.getDayOfWeek() === 6 || args.cell.start.getDayOfWeek() === 0) {
        args.cell.backColor = "#eee";
    }
};
