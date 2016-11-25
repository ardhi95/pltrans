<?php 	
		$this->load->view('back_end/html/V_first'); 
		$this->load->view('back_end/html/V_menu');
?>
	
	<div class="panel-body1">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="calendar">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
        <!-- modal Add -->
        <?php $this->load->view('back_end/jadwal/modalAdd'); ?>

        <!-- modal Edit -->
        <?php $this->load->view('back_end/jadwal/modalEdit'); ?>
	</div>
	</div>
    <!-- jQuery Version 1.11.1 -->
    <script src="<?= base_url() ?>assets/back_end/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>assets/back_end/js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='<?= base_url() ?>assets/back_end/js/moment.min.js'></script>
	<script src='<?= base_url() ?>assets/back_end/js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: Date('YYYY-MM-DD'),
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($sql as $event): 
			
				$start = explode(" ", $event->start);
				$end = explode(" ", $event->end);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event->start;
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event->end;
				}
			?>
				{
					id: '<?php echo $event->id; ?>',
					title: '<?php echo $event->title; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event->color; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		
	});

</script>

<?php $this->load->view('back_end/html/V_end'); ?>
