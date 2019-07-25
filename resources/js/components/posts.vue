<template>
	<div>
		<!-- navbar start -->
		<navbar/>
		<!-- posts start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 posts">
					<!-- write post -->
					<write-post/>
					<!-- end write post -->
					<div class="card mb-2" v-for="post in getPost.data" :key="post.id">
						<div class="card-header p-2 d-flex justify-content-between">
							<div class="d-flex justify-content-start align-items-center">
									<img class="rounded-circle mr-2" src="/img/logo.jpg" style="width:10%;">
							    <div>
								    <h4 class="card-title">{{ post.user }}</h4>
							        <span class="card-subtitle">{{ post.created_at}}</span>
							    </div>
							</div>
							<div class="mr-2">
								<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
							</div>
						</div>
						<div class="main-body pl-2 pr-2">
								<p>{{post.post}}</p>
						</div>
						<img src="/img/k7.jpg" class="card-img-top">
						<div class="card-footer p-0 mb-0">
								<button class="btn btn-sm btn-outline-primary d-flex align-items-center">
									<i class="fa fa-thumbs-up mr-1" aria-hidden="true"></i>
									<span>Like</span>
								</button>
								<button class="btn btn-sm btn-outline-primary d-flex align-items-center">
									<i class="fa fa-commenting mr-1" aria-hidden="true"></i>
									<span>Comment</span>
								</button>
								<button class="btn btn-sm btn-outline-primary">
									<i class="fa fa-share-alt mr-1" aria-hidden="true"></i>
									<span>Share</span>
								</button>
						</div>
						<!-- comments components -->
						<comments :slug="post.slug" />
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import navbar from './navbar.vue';
import comments from './comments.vue';
import { mapGetters } from 'vuex';
export default {
  name: 'posts',
	components:{
		navbar,
		comments
	},
  data () {
    return {

    }
  },
	mounted(){
		console.log()
		this.$store.dispatch('GetPost');

	},
	computed:{
	 ...mapGetters([
			 'getPost',
			 'getComment'
			 ])
	 },
	methods:{

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
