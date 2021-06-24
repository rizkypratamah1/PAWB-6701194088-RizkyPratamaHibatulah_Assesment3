$(document).on('click','#btn-edit',function(){
    $('.modal-body #id').val($(this).data('id'));
    $('.modal-body #email').val($(this).data('email'));
    $('.modal-body #nama').val($(this).data('no_ktp'));
    $('.modal-body #usia').val($(this).data('usia'));
    $('.modal-body #jenis_kelamin').val($(this).data('jenis_kelamin')); 
    $('.modal-body #alamat').val($(this).data('alamat')); 
})