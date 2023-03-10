// fungsi menampilkan detail shoes di modal
$('.modalCheck').on('click', function () {
  const id = $(this).data('id');

  $.ajax({
    url: 'http://localhost/myproject/shoestore/home/shop/getShoes',
    data: { id: id },
    method: 'post',
    dataType: 'json',
    success: function (data) {
      const idBuy = 'http://localhost/myproject/shoestore/home/buy/' + data.id;
      $('#idBuy').attr('href', idBuy);
      $('#id').val(data.id);
      $('#nameShoes').val(data.nama_shoes);
      $('#stock').val(data.stok);
      $('#categories').val(data.kategori);
      // format harga
      const price = data.harga;
      const priceFormat = price.toLocaleString('id-ID', {
        style: 'currency',
        currency: 'IDR',
      });
      $('#price').val(priceFormat);
      // get gambar shoes
      const src = 'http://localhost/myproject/shoestore/home/img-shoes/' + data.gambar;
      $('#imgShoes').attr('src', src);
    },
  });
});

// flash message
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
  Swal.fire({
    title: flashData + ' !',
    text: 'Shoes Data ' + flashData,
    icon: 'success',
  });
}

if (flashData === 'Failed to edit' || flashData === 'Failed to add' || flashData === 'Failed to delete') {
  Swal.fire({
    title: flashData + ' !',
    text: 'Shoes Data ' + flashData,
    icon: 'error',
  });
}

// delete shoes
$('.buttonDelete').on('click', function (e) {
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!',
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

// show sort by
$('.filter').on('click', function () {
  $('.filterNav').toggleClass('show');
});
