<div id="pagination_link">

</div>
<div class="table table-responsive" id="uyeler_table"></div>


<script>
	$(function () {

		function load_uyeler(page) {
			$.ajax({
				url: "<?php echo base_url(); ?>uyeler/pagination/" + page,
				method: "GET",
				dataType: "json",
				success: function (data) {
					$('#uyeler_table').html(data.uyeler_table);
					$('#pagination_link').html(data.pagination_link);
					$('li.page-item a').attr("class", "page-link");
				}
			})

		}

		load_uyeler(1);



		$(document).on("click", ".pagination li a", function (event) {
			event.preventDefault();
			let page = $(this).data("ci-pagination-page");
			load_uyeler(page);


		});
	});

</script>
