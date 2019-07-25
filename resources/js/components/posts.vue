<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 posts">
				<div class="card mb-2">
					<div class="card-header p-2 d-flex justify-content-between">
						<div class="d-flex justify-content-start align-items-center">
							<img class="rounded-circle mr-2" src="/img/logo.jpg" style="width:10%;">
						    <div>
							    <h4 class="card-title">Kajal Aggarwal</h4>
						        <span class="card-subtitle">56 min ago</span>
						    </div>
						</div>
						<div class="mr-2">
							<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
						</div>
					</div>
					<img src="/img/k2.jpg" class="card-img-top">
				</div>
				<div class="card mb-2">
					<div class="card-header p-2 d-flex justify-content-between">
						<div class="d-flex justify-content-start align-items-center">
							<img class="rounded-circle mr-2" src="/img/logo.jpg" style="width:10%;">
						    <div>
							    <h4 class="card-title">Kajal Aggarwal</h4>
						        <span class="card-subtitle">56 min ago</span>
						    </div>
						</div>
						<div class="mr-2">
							<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
						</div>
					</div>
					<img src="/img/k7.jpg" class="card-img-top">
				</div>
			</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {

  name: 'posts',

  data () {
    return {

    }
  }
}
</script>

<style lang="scss" scoped>
   .posts{
   	   .card-header{
   	   		i{
   	   			font-size: 1rem;
   	   		}
   	   }
   }
</style>