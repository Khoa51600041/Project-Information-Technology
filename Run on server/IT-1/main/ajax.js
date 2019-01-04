var search;
    var index = 0;
    var mang_sinh_vien =  new Array();
    $(document).ready(function(){
        
        function load_data(query) {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                dataType: 'json',     
                data:{query:query},
                success:function(data) {
                    var table = data['table'];
                    var row = data['row'];
                    $('#result').html(table + '<tr><td>'+row["maSV"]+'</td><td>'+ row["tenSV"] + '</td><td>' + row["maLop"] + '</td></tr></table>');
                }
            });
        }

        $('#search_text').keyup(function() {
            search = $(this).val();
            if(search != '') {
                load_data(search);
                $(this).val() = "";
            }else {
                load_data('');
                $('#result');
            }
        }); 
    });

    /*
    function memory() {
        var query = search;
        $.ajax({
            url:"fetch.php",
            method:"POST",
            dataType: 'json',     
            data:{query:query},
            success:function(data) {
                var row = data['row'];
                var add = document.getElementById("add-list");
                add.innerHTML += '<span class="name">' + row["tenSV"] + '</span> - <span class="id">' + row["maSV"] + '</span></br>';
                mang_sinh_vien[index] = row;
                index++;
            }
        });
    }

    function store(){

    }*/