// ajax

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id, url)
{
    if(confirm('Dữ liệu này không thể khôi phục, bạn chắc chắn muốn xóa không ? '))
    {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function(result) {
                if(result.error === false)
                {
                    alert(result.message);
                    location.reload(); // Load Lại trang
                }
                else{
                    alert("Vui lòng thử lại");
                }
            }
        });
    }
}

// Upload file
$('#upload').change(function (){
    const form = new FormData(); // Khởi tạo form data
    form.append('file', $(this)[0].files[0]);  // Đặt tên là file , Lấy thông tin ($this) đối tượng vừa chọn, lấy cái đầu tiên 0
     
    $.ajax({
         processData: false,
         contentType: false, 
         type: 'POST', // gửi thông tin
         dataType: 'JSON', // data trả về
         data: form,
         url: '/admin/upload/services', // xử lý đường dẫn
         success: function(results){  // upload thành công
            if(results.error === false) { 
                $('#image_show').html('<a href="' + results.url + '" target="_blank"><img src="' + results.url + '" width="100px"></a>');
                
                $('#thumb').val(results.url);
            } else{
                alert('Upload File Lỗi');
            }      
         }
     }); 
});