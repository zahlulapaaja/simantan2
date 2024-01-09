"use strict";var KTChartMap={init:function(){!function(){if(document.getElementById("chartdiv")){var e=am5.Root.new("chartdiv");e.setThemes([am5themes_Animated.new(e)]);var t=e.container.children.push(am5map.MapChart.new(e,{panX:"rotateX",projection:am5map.geoNaturalEarth1()})),a=t.series.push(am5map.MapPolygonSeries.new(e,{geoJSON:am5geodata_continentsLow,exclude:["antarctica"]}));a.mapPolygons.template.setAll({tooltipText:"{name}",interactive:!0,templateField:"settings"}),a.mapPolygons.template.states.create("hover",{fill:am5.color(6781237)});var n=am5.ColorSet.new(e,{});a.data.setAll([{id:"europe",settings:{fill:n.next(),fillPattern:am5.LinePattern.new(e,{color:am5.color(16777215),rotation:45,strokeWidth:1})}},{id:"asia",settings:{fill:n.next(),fillPattern:am5.RectanglePattern.new(e,{color:am5.color(16777215),checkered:!0})}},{id:"africa",settings:{fill:n.next(),fillPattern:am5.CirclePattern.new(e,{color:am5.color(16777215),checkered:!0})}},{id:"northAmerica",settings:{fill:n.next(),fillPattern:am5.CirclePattern.new(e,{color:am5.color(16777215)})}},{id:"southAmerica",settings:{fill:n.next(),fillPattern:am5.LinePattern.new(e,{color:am5.color(16777215),rotation:90,strokeWidth:2})}},{id:"oceania",settings:{fill:n.next(),fillPattern:am5.LinePattern.new(e,{color:am5.color(16777215)})}}]),initChart(),KTThemeMode.on("kt.thememode.change",(function(){t.rendered&&t.self.destroy(),initChart()}))}}()}};"undefined"!=typeof module&&void 0!==module.exports&&(module.exports=KTChartMap),KTUtil.onDOMContentLoaded((function(){KTChartMap.init()}));