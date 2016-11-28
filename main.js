function weather_pluginAppObj_51() {
    

    x5engine.boot.push(function(){
        var location = 'Houghton, MI',
            name = 'Home',
            units = 'f',
            show_minmax = true,
            show_wind = true,
            show_humidity = true,
            show_visibility = true,
            show_pressure = true,
            show_sunrise = true,
            next_days = '4',
            lang = 'EN';

        resize_weather();
        
        $.simpleWeather({
            location: location,
            woeid: '',
            unit: units,
            success: function(weather) {
                html  = '<div class="weather-wrapper">';
                html += '<div class="main-weather">';
                html += '   <div class="icon icon-' + weather.code + '"></div>';
                html += '   <div class="temp">' + weather.temp + '&deg;' + weather.units.temp + '</div>';
                html += '   <div class="name">' + name + '</div>';
                html += '</div>';

                html += '<div class="extra-weather">';
                if(show_minmax)
                    html += '   <div class="extra min-max"><div class="line"><div class="icon min-icon"></div>' + weather.low + '&deg;</div><div class="line"><div class="icon max-icon"></div>' + weather.high + '&deg;</div></div>';
                if(show_wind)
                    html += '   <div class="extra wind"><div class="line"><div class="icon wind-icon"></div>' + weather.wind.speed + ' ' + weather.units.speed + '</div><div class="line"><div class="icon wind-dir-icon"></div>' + weather.wind.direction + '</div></div>';
                if(show_humidity)
                    html += '   <div class="extra humidity single-line"><div class="line"><div class="icon humidity-icon"></div>' + weather.humidity + '%</div></div>';
                if(show_visibility)
                    html += '   <div class="extra visibility single-line"><div class="line"><div class="icon visibility-icon"></div>' + weather.visibility + ' ' + weather.units.distance + '</div></div>';
                if(show_pressure)
                    html += '   <div class="extra pressure single-line"><div class="line"><div class="icon pressure-icon"></div>' + weather.pressure + ' ' + weather.units.pressure + '</div></div>';
                if(show_sunrise)
                    html += '   <div class="extra sunrise"><div class="line"><div class="icon sunrise-icon"></div>' + weather.sunrise + '</div><div class="line"><div class="icon sunset-icon"></div>' + weather.sunset + '</div></div>';
                html += '</div>';

                html += '<div class="next-weather">';
                for (var i = 1; i <= next_days; i++) {
                    html += '<div class="next-day">';
                    var currDate = new Date(weather.forecast[i].date);
                    var dayString = supportWeekdays() ? currDate.toLocaleString(lang, {weekday: 'long'}) : (currDate.getDate() + "/" + (currDate.getMonth()+1));
                    html += '   <div class="day-name">' + dayString + '</div>';
                    html += '   <div class="icon icon-' + weather.forecast[i].code + '"></div>';
                    html += '   <div class="minmax">' + weather.forecast[i].low + '&deg; | ' + weather.forecast[i].high + '&deg;</div>';
                    html += '</div>';
                };
                html += '</div>';
                html += '</div>';


                $("#weather_pluginAppObj_51").html(html);

                if(false && typeof(weather.title) != 'undefined'){
                    $("#weather_pluginAppObj_51").prepend("<div class='debug-msg'>" + weather.title + "</div>");
                }
                resize_weather();
            },
            error: function(error) {
                $("#weather_pluginAppObj_51").html('<p class="error-msg">' + error + '</p>');
            }
          });
    });

    $("#imContent").on("breakpointChangedOrFluid", function (e, breakpoint) {
        resize_weather();
    });

    function resize_weather(){
        var height = 400;
        var width = 600;
        var container_width = $("#pluginAppObj_51").width();
        var inner_height = calculate_min_height();
        $("#weather_pluginAppObj_51 .weather-wrapper").css({"height": inner_height});

        if(container_width > width){
            $("#weather_pluginAppObj_51").css({"width": width,"height": height});
        }
        else{
            var new_height = (container_width/width) * height;
            $("#weather_pluginAppObj_51").css({"width": container_width,"height": Math.max(new_height,inner_height)});
        }
    }

    function calculate_min_height(){
        var main_height = 115;
        var extras_height = 60;
        var days_height = 90;

        var extras = 0;
        var days = 4;

        var width = 600;
        var container_width = $("#pluginAppObj_51").width();
        width = Math.min(width, container_width);

        if(true)
            extras++;
        if(true)
            extras++;
        if(true)
            extras++;
        if(true)
            extras++;
        if(true)
            extras++;
        if(true)
            extras++;

        var extras_per_row = Math.floor(container_width / 120);
        extras_height =  extras_height * Math.ceil(extras / extras_per_row);

        var days_per_row = Math.floor(container_width / 80);
        days_height =  days_height * Math.ceil(days / days_per_row);

        return main_height + extras_height + days_height;

    }

    function supportWeekdays() {
        try {
            new Date().toLocaleString('i');
        } catch (e) {
            return e.name === 'RangeError';
        }
        return false;
    }

}