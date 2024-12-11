/*
* jHtree Horizontal Animated jQuery Plugin
* 4/2014
* By NADy:   @naadydev     naadydev@gmail.com
*/
(function ($) {

    $.widget("jHtree.jHTree", {
        options: {
            callType: 'url',
            url: '',
            structureObj: [{}],
            zoomer: true,
            afterDropClass: 'contaftrdrop'
        },
        _init: function () {
        },
        _setOption: function (key, value) {
            this._super(key, value);
        },
        _setOptions: function (options) {
            this._super(options);
            this._createUpdate();
        },
        _createUpdate: function () {
            parentthis = this;
            //-----------------------
            if (this.options.callType == 'url') {
                $.getJSON(this.options.url, function (data) {

                })
                    .done(function (data) {

                        parentthis._constructTree(data);

                    })
                    .fail(function (err) {
                        var status = err.status;
                        var statusText = err.statusText;


                    });
            }
            if (this.options.callType == 'obj') {
                //-----------------------
                this._constructTree(this.options.structureObj);
                //-----------------------
            }



        },
        _create: function () {
            this._createUpdate();
        },
        destroy: function () {

            $.Widget.prototype.destroy.call(this);
        },

        _constructTree: function (jsonStructureObject) {

            var $tree = $(this.element);
            $tree.addClass('tree').append("<ul id='tremainul'>");

            this._walkerCursor(jsonStructureObject, 'tremainul');
            this._prepareNodes();
            // this._treeDarg();
            // this._treeDrop();
            this._interactionEvents();
            if (this.options.zoomer) this._zoomer($tree);
        },

        _walkerCursor: function (jsonObjs, parentLiNode) {
            for (var i = 0; i < jsonObjs.length; i++) {
                var node = jsonObjs[i];

                this._createNode(node, parentLiNode);

                if (node.children !== null && typeof node.children === "object") {
                    this._walkerCursor(node.children, node.id);
                }
            }
        },

        _createNode: function (node, parentLiNode) {
            var bfrul = '';
            var isTreemainLi = (parentLiNode === "tremainul");
            var beforeDiv = '';
            var afterDiv = '';
            if (node.children) {
                bfrul = '<div class="bfrul"></div>';
            }
            if (!isTreemainLi) {
                beforeDiv = '<div class="before"><div class="funcbtnb ui-state-default ui-corner-all" title="Level Focus" data-func="focus"><span class="ui-icon ui-icon-zoomin"></span></div></div>';
                afterDiv = '<div class="after"><div class="funcbtna ui-state-default ui-corner-all" title="collapse" data-func="clps"><span class="ui-icon ui-icon-triangle-1-n"></span></div></div>';
                // if (node.level == 'tujuan_kota' && node.jumlah_tk == 1) {
                //     afterDiv += '<div style="width:250px"></div>';
                // }
            }

            if (node.crosscat == true) {
                if (node.jenis == 'csf') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="' + node.id + '" class="tnode" >';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont cross-tip">';
                            nodeLiElements += '<span class="cross-tip-text">'+node.text_tooltip+'</span>';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr ui-crosscatting" data-urlCross="'+node.url_crosscat+'" data-list-crosscut="'+node.list_crosscat+'" data-id-misi="'+node.id_misi+'" data-level="'+node.level+'" data-list-indikator="'+node.list_id_indi+'">';
                                nodeLiElements += '<div class="ui-widget-header-data">';
                                    nodeLiElements += node.head;
                                nodeLiElements += '</div>';
                                if (node.list_indi.length > 0) {
                                    nodeLiElements += "<ul class='ui-widget-header-indikator' style='display:none'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi_indikator+"</li>";
                                    });
                                    nodeLiElements += "</ul>";
                                }
                            nodeLiElements += '</div>';
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br ui-content-crosscatting">'+node.contents+'</div>';
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>';
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else if (node.jenis == 'nomenklatur') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="' + node.id + '" class="tnode" >';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont cross-tip">';
                            nodeLiElements += '<span class="cross-tip-text">'+node.text_tooltip+'</span>';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr ui-crosscatting" data-urlCross="'+node.url_crosscat+'" data-list-crosscut="'+node.list_crosscat+'" data-id-misi="'+node.id_misi+'" data-level="'+node.level+'" data-list-indikator="'+node.list_id_indi+'">';
                                    nodeLiElements += node.head;
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br ui-content-crosscatting">'+node.contents+'</div>';
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>';
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else if (node.jenis == 'pohon_kinerja_semula_menjadi') {
                    var nodeLiElements = '';
                    if (node.crosscat_list == false) {
                        nodeLiElements += '<li id="'+node.id+'" class="tnode parent-cross">';
                    } else {
                        nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                    }
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            // Menjadi
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr">';
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';

                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br">';
                                nodeLiElements += "<ul class='ui-widget-indikator'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi+"</li>";
                                    });
                                nodeLiElements += "</ul>";
                                nodeLiElements += "<div class='clearfix'></div>";
                            nodeLiElements += '</div>';

                            // Semula
                            let head_sama    = false;
                            let content_sama = false;
                            if (node.head_semula != 'crosscut') {
                                if (node.level != 'opd' && node.level != 'Kepala') {
                                    if (node.head_semula == null) { head_sama = false; }
                                    else {
                                        if (node.head_semula.toLowerCase().replace(/ {2,}/g, ' ').trim() == node.head.toLowerCase().replace(/ {2,}/g, ' ').trim()) {
                                            head_sama = true;
                                        }
                                    }

                                    if (node.list_indi.length != node.list_indi_semula.length) {
                                        content_sama = false;
                                    } else {
                                        let temp_content = [];
                                        $.each(node.list_indi, function(k,v){
                                            let temp_list_content = false;
                                            $.each(node.list_indi_semula, function(k,vs){
                                                if (v.narasi.toLowerCase().replace(/ {2,}/g, ' ').trim() == vs.narasi.toLowerCase().replace(/ {2,}/g, ' ').trim()) {
                                                    temp_list_content = true;
                                                }
                                            });
                                            temp_content.push(temp_list_content);
                                        });

                                        for (let itc = 0; itc < temp_content.length; itc++) {
                                            if(temp_content[itc] == true){ content_sama = true; }
                                        }
                                    }

                                    if (head_sama == false || content_sama == false) {
                                        nodeLiElements += '<div class="ui-widget-header-semula ui-corner-tl ui-corner-tr border-radius-none">';
                                            nodeLiElements += (node.head_semula == null ) ? '-' : node.head_semula;
                                        nodeLiElements += '</div>';

                                        nodeLiElements += '<div class="ui-widget-content-semula ui-corner-bl ui-corner-br">';
                                            if (node.list_indi_semula.length > 0) {
                                                nodeLiElements += "<ul class='ui-widget-indikator'>";
                                                    $.each(node.list_indi_semula, function(k,vs){
                                                        nodeLiElements += "<li>"+vs.narasi+"</li>";
                                                    });
                                                nodeLiElements += "</ul>";
                                                nodeLiElements += "<div class='clearfix'></div>";
                                            } else {
                                                nodeLiElements += '-';
                                            }
                                        nodeLiElements += '</div>';
                                    }
                                }
                            }

                            // Panel Unit
                            if (node.list_unit.length > 0) {
                                nodeLiElements += '<div class="ui-widget-content-unit ui-corner-bl ui-corner-br border-radius-none">';
                                    $.each(node.list_unit, function(k,u){
                                        nodeLiElements += u.nama;
                                    });
                                nodeLiElements += '</div>';
                            }

                            // Panel Crosscut
                            nodeLiElements += '<div class="ui-widget-content-crosscutting ui-corner-bl ui-corner-br">';
                                nodeLiElements += node.keterangan_cross;
                            nodeLiElements += '</div>';

                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else {
                    var nodeLiElements = '';
                    if (node.crosscat_list == false) {
                        nodeLiElements += '<li id="'+node.id+'" class="tnode parent-cross">';
                    } else {
                        nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                    }
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr">';
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';
                            let border_radius = '';
                            if (node.list_unit.length > 0) {
                                border_radius = 'border-radius-none';
                            }
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br '+border_radius+'">';
                                if (node.jenis == 'tematik') {
                                    if (/\r|\n/.exec(node.list_indi[0].narasi)) {
                                        let list_indi_string = node.list_indi[0].narasi.split(/\r?\n/);
                                        nodeLiElements += "<ul class='ui-widget-indikator'>";
                                        for (let lis = 0; lis < list_indi_string.length; lis++) {
                                            nodeLiElements += "<li style='list-style-type: none !important;left:0px !important'>"+list_indi_string[lis]+"</li>";
                                        }
                                        nodeLiElements += "</ul>";
                                        nodeLiElements += "<div class='clearfix'></div>";
                                    } else {
                                        nodeLiElements += "<ul class='ui-widget-indikator'>";
                                        $.each(node.list_indi, function(k,v){
                                            nodeLiElements += "<li>"+v.narasi+"</li>";
                                        });
                                        nodeLiElements += "</ul>";
                                        nodeLiElements += "<div class='clearfix'></div>";
                                    }
                                } else {
                                    nodeLiElements += "<ul class='ui-widget-indikator'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi+"</li>";
                                    });
                                    nodeLiElements += "</ul>";
                                    nodeLiElements += "<div class='clearfix'></div>";
                                }
                                // nodeLiElements += node.contents;
                            nodeLiElements += '</div>';
                            if (node.list_unit.length > 0) {
                                nodeLiElements += '<div class="ui-widget-content-unit ui-corner-bl ui-corner-br border-radius-none">';
                                    // nodeLiElements += "<ul class='ui-widget-unit'>";
                                    // $.each(node.list_unit, function(k,u){
                                    //     nodeLiElements += "<li>"+u.nama+"</li>";
                                    // });
                                    // nodeLiElements += "</ul>";
                                    // nodeLiElements += "<div class='clearfix'></div>";
                                    $.each(node.list_unit, function(k,u){
                                        nodeLiElements += u.nama;
                                    });
                                nodeLiElements += '</div>';
                            }
                            nodeLiElements += '<div class="ui-widget-content-crosscutting ui-corner-bl ui-corner-br">';
                                nodeLiElements += node.keterangan_cross;
                            nodeLiElements += '</div>';
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                }
            } else {
                if (node.jenis == 'csf') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                        nodeLiElements += beforeDiv;
                        let hide_trcont = '';
                        if (node.head == '*') {
                            hide_trcont = 'style="display:none"' ;
                        }
                        nodeLiElements += '<div class="trcont" '+hide_trcont+'>';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr" data-id-misi="'+node.id_misi+'" data-level="'+node.level+'" data-list-indikator="'+node.list_id_indi+'" data-kode-clustering="'+node.kode_cluster+'">';
                                nodeLiElements += '<div class="ui-widget-header-data">';
                                    nodeLiElements += node.head;
                                nodeLiElements += '</div>';
                                if (node.list_indi.length > 0) {
                                    nodeLiElements += "<ul class='ui-widget-header-indikator' style='display:none'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi_indikator+"</li>";
                                    });
                                    nodeLiElements += "</ul>";
                                }
                            nodeLiElements += '</div>';
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br">';
                                nodeLiElements += node.contents;
                            nodeLiElements += '</div>';
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else if (node.jenis == 'nomenklatur') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr" data-id-misi="'+node.id_misi+'" data-level="'+node.level+'" data-list-indikator="'+node.list_id_indi+'">';
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br">';
                                nodeLiElements += node.contents;
                            nodeLiElements += '</div>';
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else if (node.jenis == 'pohon_kinerja_semula_menjadi') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            // Menjadi
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr">';
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';

                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br">';
                                nodeLiElements += "<ul class='ui-widget-indikator'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi+"</li>";
                                    });
                                nodeLiElements += "</ul>";
                                nodeLiElements += "<div class='clearfix'></div>";
                            nodeLiElements += '</div>';

                            // Semula
                            let head_sama    = false;
                            let content_sama = false;
                            if (node.head_semula != 'crosscut') {
                                if (node.level != 'opd' && node.level != 'Kepala') {
                                    if (node.head_semula == null) { head_sama = false; }
                                    else {
                                        if (node.head_semula.toLowerCase().replace(/ {2,}/g, ' ').trim() == node.head.toLowerCase().replace(/ {2,}/g, ' ').trim()) {
                                            head_sama = true;
                                        }
                                    }

                                    if (node.list_indi.length != node.list_indi_semula.length) {
                                        content_sama = false;
                                    } else {
                                        let temp_content = [];
                                        $.each(node.list_indi, function(k,v){
                                            let temp_list_content = false;
                                            $.each(node.list_indi_semula, function(k,vs){
                                                if (v.narasi.toLowerCase().replace(/ {2,}/g, ' ').trim() == vs.narasi.toLowerCase().replace(/ {2,}/g, ' ').trim()) {
                                                    temp_list_content = true;
                                                }
                                            });
                                            temp_content.push(temp_list_content);
                                        });

                                        for (let itc = 0; itc < temp_content.length; itc++) {
                                            if(temp_content[itc] == true){ content_sama = true; }
                                        }
                                    }

                                    if (head_sama == false || content_sama == false) {
                                        nodeLiElements += '<div class="ui-widget-header-semula ui-corner-tl ui-corner-tr border-radius-none">';
                                            nodeLiElements += (node.head_semula == null ) ? '-' : node.head_semula;
                                        nodeLiElements += '</div>';

                                        nodeLiElements += '<div class="ui-widget-content-semula ui-corner-bl ui-corner-br">';
                                            if (node.list_indi_semula.length > 0) {
                                                nodeLiElements += "<ul class='ui-widget-indikator'>";
                                                    $.each(node.list_indi_semula, function(k,vs){
                                                        nodeLiElements += "<li>"+vs.narasi+"</li>";
                                                    });
                                                nodeLiElements += "</ul>";
                                                nodeLiElements += "<div class='clearfix'></div>";
                                            } else {
                                                nodeLiElements += '-';
                                            }
                                        nodeLiElements += '</div>';
                                    }
                                }
                            }
                            // Panel Unit
                            if (node.list_unit.length > 0) {
                                nodeLiElements += '<div class="ui-widget-content-unit ui-corner-bl ui-corner-br">';
                                if (node.list_unit.length > 1) {
                                    nodeLiElements += "<ul class='ui-widget-unit'>";
                                        $.each(node.list_unit, function(k,u){
                                            nodeLiElements += "<li>"+u.nama+"</li>";
                                        });
                                    nodeLiElements += "</ul>";
                                    nodeLiElements += "<div class='clearfix'></div>";
                                } else {
                                    $.each(node.list_unit, function(k,u){
                                        nodeLiElements += u.nama;
                                    });
                                }
                                nodeLiElements += '</div>';
                            }
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else if (node.jenis == 'pohon_realisasi_rpjmd') {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            nodeLiElements += '<div class="ui-widget-header '+node.class_color+' ui-corner-tl ui-corner-tr">';
                                if (node.level != 'opd') {
                                    nodeLiElements += "<div style='font-style: italic;text-decoration: underline;'>";
                                        switch (node.level) {
                                            case "tujuan_pd": nodeLiElements += "Tujuan"; break;
                                            case "sasaran_pd": nodeLiElements += "Sasaran"; break;
                                            case "program_pd": nodeLiElements += "Program"; break;
                                            case "kegiatan_pd": nodeLiElements += "Kegiatan"; break;
                                            case "sub_kegiatan_pd": nodeLiElements += "Sub Kegiatan"; break;
                                        }
                                        nodeLiElements += " : ";
                                    nodeLiElements += "</div>";
                                }
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';
                            nodeLiElements += '<div class="ui-widget-content '+node.class_color+' ui-corner-bl ui-corner-br border-radius-none">';
                                nodeLiElements += "<ul class='ui-widget-indikator'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>";
                                            nodeLiElements += v.narasi;
                                            nodeLiElements += "<div>[ Target : "+v.target+" "+v.satuan+" ]</div>";
                                        nodeLiElements += "</li>";
                                    });
                                nodeLiElements += "</ul>";
                                nodeLiElements += "<div class='clearfix'></div>";
                            nodeLiElements += '</div>';
                            if (node.level == 'sub_kegiatan_pd') {
                                nodeLiElements += '<div class="ui-widget-content-anggaran '+node.class_color+' ui-corner-bl ui-corner-br">';
                                    nodeLiElements += "<div>Capaian Anggaran : "+node.capaian_anggaran+" %</div>";
                                nodeLiElements += '</div>';
                            }
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                } else {
                    var nodeLiElements = '';
                    nodeLiElements += '<li id="'+node.id+'" class="tnode">';
                        nodeLiElements += beforeDiv;
                        nodeLiElements += '<div class="trcont">';
                            nodeLiElements += '<div class="ui-widget-header ui-corner-tl ui-corner-tr">';
                                nodeLiElements += node.head;
                            nodeLiElements += '</div>';
                            let border_radius = '';
                            if (node.list_unit.length > 0) {
                                border_radius = 'border-radius-none';
                            }
                            nodeLiElements += '<div class="ui-widget-content ui-corner-bl ui-corner-br '+border_radius+'">';
                                if (node.jenis == 'tematik') {
                                    if (/\r|\n/.exec(node.list_indi[0].narasi)) {
                                        let list_indi_string = node.list_indi[0].narasi.split(/\r?\n/);
                                        nodeLiElements += "<ul class='ui-widget-indikator'>";
                                        for (let lis = 0; lis < list_indi_string.length; lis++) {
                                            nodeLiElements += "<li style='list-style-type: none !important;left:0px !important'>"+list_indi_string[lis]+"</li>";
                                        }
                                        nodeLiElements += "</ul>";
                                        nodeLiElements += "<div class='clearfix'></div>";
                                    } else {
                                        nodeLiElements += "<ul class='ui-widget-indikator'>";
                                        $.each(node.list_indi, function(k,v){
                                            nodeLiElements += "<li>"+v.narasi+"</li>";
                                        });
                                        nodeLiElements += "</ul>";
                                        nodeLiElements += "<div class='clearfix'></div>";
                                    }
                                } else {
                                    nodeLiElements += "<ul class='ui-widget-indikator'>";
                                    $.each(node.list_indi, function(k,v){
                                        nodeLiElements += "<li>"+v.narasi+"</li>";
                                    });
                                    nodeLiElements += "</ul>";
                                    nodeLiElements += "<div class='clearfix'></div>";
                                }
                            nodeLiElements += '</div>';
                            if (node.list_unit.length > 0) {
                                nodeLiElements += '<div class="ui-widget-content-unit ui-corner-bl ui-corner-br">';
                                    if (node.list_unit.length > 1) {
                                        nodeLiElements += "<ul class='ui-widget-unit'>";
                                        $.each(node.list_unit, function(k,u){
                                            nodeLiElements += "<li>"+u.nama+"</li>";
                                        });
                                        nodeLiElements += "</ul>";
                                        nodeLiElements += "<div class='clearfix'></div>";
                                    } else {
                                        $.each(node.list_unit, function(k,u){
                                            nodeLiElements += u.nama;
                                        });
                                    }
                                nodeLiElements += '</div>';
                            }
                        nodeLiElements += '</div>';
                        nodeLiElements += '<div class="trchl">';
                            nodeLiElements += '<ul>'+bfrul+'</ul>';
                        nodeLiElements += '</div>'
                        nodeLiElements += afterDiv;
                    nodeLiElements += '</li>';
                }
            }

            if (isTreemainLi) {// Firest ul
                $("#" + parentLiNode).append(nodeLiElements);
            }
            else {
                $("> .trchl > ul", "#" + parentLiNode).append(nodeLiElements);
            }
        },

        _prepareNodes: function () {

            $('.trchl').each(function (e, x) {
                var $obj = $(this);

                var $li = $($obj).find('> ul>li');
                var count = $li.length;

                if (count == 1)
                {
                    $($li).find('> .before, > .after').css("border-top", "0px");
                }
                if (count > 1) {
                    $li.first().find('> .after').css("border-top", "0px");
                    $li.last().find('> .before').css("border-top", "0px");
                }

                var chldinsidlicount = $li.find('.trchl');


                $obj.find('div[data-func]').each(function (a, o) {
                    var objbtn = $(o);
                    if (objbtn.data('func') == "reset") {
                        objbtn.show();
                        var objfocus = objbtn.parent().closest('li');
                        var objother = objfocus.parent().find('> li');
                        var targetobjs = $(objother).not(objfocus);
                        targetobjs.hide();
                    }

                    if (objbtn.data('func') == "xpnd") {
                        objbtn.show();
                        objbtn.parent().parent().find('.trchl').hide();
                    }


                });

            });
        },

        _treeDarg: function () {

            $("li", ".tree").draggable({

                cancel: "a.ui-icon",
                revert: "invalid",
                revertDuration: 600,
                containment: "document",

                helper: function (event, ui) {

                    var orginalElement = $(this);
                    var header = orginalElement.find('> .trcont').find('.ui-widget-header');
                    var headerCopy = header.text();
                    return $('<div class="ui-state-focus ui-corner-all" />').css("width", header.css("width")).text(headerCopy);


                },
                cursor: "move",
                distance: 20,
                opacity: 0.8,
                snap: '.trcont',
                snapMode: 'inner',
                stack: '.trcont',
                start: function (event, ui) { },
                stop: function (event, ui) { }
            });

        },

        _treeDrop: function () {
            var thisparent = this;
            $("li", ".tree").droppable({

                greedy: true,
                accept: ".tree ul > li",
                activeClass: "dragactive",
                hoverClass: 'drophover',
                drop: function (event, ui) {


                    var draggableObj = ui.draggable;
                    var droppableObj = $(this);

                    var draggableId = draggableObj.attr("id");
                    var droppableId = droppableObj.attr("id");


                    var $ItemUL = $("ul:first", droppableObj);

                    if ($ItemUL.length) {


                        if (!$ItemUL.find('> .bfrul').length) {
                            $ItemUL.append('<div class="bfrul"></div>');
                        }
                        //---------------
                        $(draggableObj).fadeOut("slow", function () {
                            $(this).appendTo($ItemUL).fadeIn('slow')
                            .effect('shake', { direction: 'down', mode: 'effect' }, 'slow');
                            $(this).find("> .trcont").addClass(thisparent.options.afterDropClass);


                        });


                    }
                    prepareNodesAfterDrop(draggableObj, droppableObj);
                    thisparent._trigger("nodeDropComplete", null, { nodeId: draggableId, parentNodeId: droppableId });
                }
            });
            function prepareNodesAfterDrop(movedObj, targetObj) {

                var parentUl = $(movedObj).parent();
                var parentLis = parentUl.find('> li');
                var objIndex = movedObj.index();
                if (parentLis.length == 1)
                {

                    $('.bfrul', parentUl).fadeOut("slow", function () {
                        $(this).remove();
                    });
                }
                if (parentLis.length > 1)
                {
                    var $besideLi;

                    if (objIndex == 1)
                    {

                        $besideLi = $(movedObj).next('li');
                        if (parentLis.length == 2) {
                            $besideLi.find('> .before ,> .after').css("border-top", "0px");
                        }
                        else
                        {
                            $besideLi.find('> .after').css("border-top", "0px");
                        }
                    }
                    if (objIndex == parentLis.length)
                    {
                        $besideLi = $(movedObj).prev('li');
                        if (parentLis.length == 2) {
                            $besideLi.find('> .before ,> .after').css("border-top", "0px");
                        }
                        else
                        {
                            $besideLi.find('> .before').css("border-top", "0px");
                        }
                    }
                }

                var $targetlis = $(targetObj).find('> .trchl > ul > li');

                if ($targetlis.length == 0)
                {
                    $(movedObj).find('> .before ,> .after').css("border-top", "0px");
                }
                else
                {
                    $(movedObj).find('> .before').css("border-top", "0px");
                    $(movedObj).find('> .after').css("border-top", "1px solid #ccc");

                    var $lastLi = $targetlis.last();
                    $lastLi.find("> .before").css("border-top", "1px solid #ccc");
                }
            }

        },

        _interactionEvents: function () {

            $(".tree").on({
                mouseenter: function () {
                    var parentLi = $(this).parent();

                    // parentLi.find('> .before,> .after').find('> .funcbtnb,> .funcbtna').show('blind', { direction: 'vertical' });

                    parentLi.find('.ui-widget-content').addClass('tfocus');
                    parentLi.find('.ui-widget-header').addClass('ui-state-focus');
                },
                mouseleave: function () {

                    var parentLi = $(this).parent();
                    parentLi.find('.ui-widget-content').removeClass('tfocus');
                    parentLi.find('.ui-widget-header').removeClass('ui-state-focus');

                }
            }, ".trcont,.before,.after");

            $(".tree").on('mouseleave', '.tnode', function () {

                var funcbtns = $(this).find('> .before,> .after').find('div[data-func]');
                if ($(funcbtns[0]).data('func') == "focus") {
                    $(funcbtns[0]).hide('blind', { direction: 'vertical' });
                }
                if ($(funcbtns[1]).data('func') == "clps") {
                    $(funcbtns[1]).hide('blind', { direction: 'vertical' });
                }

            });

            // $(".tree").on("click", ".trcont > .ui-widget-header", function () {
            //     $(this).parent().parent().find('.trchl').slideToggle('slow', "easeOutBounce", function () {
            //         // Animation complete.
            //     });
            // });

            $(".tree").on("click", ".trcont > .ui-widget-header", function () {
                var temp1 = $(this).parent().parent().find('.trchl:first').slideToggle('slow', "easeOutBounce", function () {
                    // Animation complete.
                });

                let header_child = $(this).parent().parent().find('.trchl > ul > li > .trcont > .ui-widget-header > .ui-widget-header-data').html();

                if (header_child == '*') {
                    var temp2 = $(this).parent().parent().find('.trchl > ul > li > .trchl:first').slideToggle('slow', "easeOutBounce", function () {
                        // Animation complete.
                    });
                }

                setTimeout(
                    function() {
                        generate_clustering();
                    }, 1000
                );

            });

            /*
            $(".tree").on("click", ".trcont > .ui-crosscatting", function () {
                var url_cross = $(this).attr('data-urlCross');
                window.open(url_cross);
            });
            */

            // $(".tree").on("dblclick", ".trcont > .ui-widget-header", function () {
            //     var id_misi = $(this).data('id-misi');
            //     var level_target = $(this).data('level');
            //     var list_id_target = $(this).data('list-indikator');
            //     show_info(id_misi, level_target, list_id_target);
            // });

            $(".tree").on("click", ".trcont > .ui-widget-content", function () {
                var id_misi = $(this).parent().find('.ui-widget-header:first').data('id-misi');
                var level_target = $(this).parent().find('.ui-widget-header:first').data('level');
                var list_id_target = $(this).parent().find('.ui-widget-header:first').data('list-indikator');
                var list_crosscat = $(this).parent().find('.ui-widget-header:first').data('list-crosscut');
                show_info(id_misi, level_target, list_id_target, list_crosscat);
            });

            let tempTimeClick = 0;
            let tempTimeOut = 0;
            $(".tree").on("mousedown", ".trcont > .ui-widget-header", function () {
                var id_misi = $(this).data('id-misi');
                var level_target = $(this).data('level');
                var list_id_target = $(this).data('list-indikator');
                var list_crosscat = $(this).data('list-crosscut');
                tempTimeOut = setInterval(function(){
                    if(tempTimeClick > 3) {
                        show_info(id_misi, level_target, list_id_target, list_crosscat);
                        tempTimeClick = 0;
                    } else {
                        tempTimeClick++;
                    }
                }, 100);
            }).on('mouseup mouseleave', ".trcont > .ui-widget-header", function() {
                tempTimeClick = 0;
                clearInterval(tempTimeOut);
            });

            $(".tree").on("click", "div[data-func]", function () {
                var objbtn = $(this);
                var objfocus = objbtn.parent().closest('li');
                var objother = objfocus.parent().find('> li');
                var targetobjs = $(objother).not(objfocus);

                var objfuncattr = objbtn.data("func");
                if (objfuncattr == 'focus' || objfuncattr == 'reset') {



                    objbtn.find('span').toggleClass('ui-icon-zoomin ui-icon-zoomout');
                    if (objfuncattr == 'focus') {


                        targetobjs.effect('fold', { direction: 'up', mode: 'hide' }, 'normal');

                        objbtn.data("func", "reset");
                        objbtn.attr("title", "Level Reset");
                    }
                    else {

                        targetobjs.effect('fold', { direction: 'up', mode: 'show' }, 'slow');
                        objbtn.data("func", "focus");
                        objbtn.attr("title", "Level Focus");
                    }
                }

                if (objfuncattr == 'clps' || objfuncattr == 'xpnd') {

                    objbtn.find('span').toggleClass("ui-icon-triangle-1-n ui-icon-triangle-1-s");
                    if (objfuncattr == 'clps') {
                        $(this).parent().parent().find('.trchl').effect('fold', { direction: 'up', mode: 'hide' }, 'slow');
                        objbtn.data('func', 'xpnd');
                        objbtn.attr("title", "Expand");
                    } else {

                        $(this).parent().parent().find('.trchl:first').slideDown('slow', "easeOutBounce", function () { });

                        objbtn.data('func', 'clps');
                        objbtn.attr("title", "Collapse");
                    }
                }
            });

        },

        _zoomer: function (treeDiv) {
            var zmr = '<div class="zmrcntr"><input type="text" id="zmrval" class="zomrval"><div id="zmrslidr" style="height:200px;"></div></div>';
            $(zmr).insertBefore($(treeDiv));

            var brwstp = navigator.userAgent.match(/Mozilla/);
            $("#zmrslidr").slider({
                orientation: "vertical",
                range: "min",
                min: 10,
                animate: 'slow',
                max: 200,
                value: 100,
                slide: function (event, ui) {
                    $("#zmrval").val(ui.value);
                    if (brwstp == true) {

                        $('.tree').css('MozTransform', 'scale(' + ui.value + ')');
                    } else {

                        $('.tree').css('zoom', ' ' + ui.value + '%');
                    }
                }
            });
            $("#zmrval").val($("#zmrslidr").slider("value"));

        }

    });

})(jQuery);
