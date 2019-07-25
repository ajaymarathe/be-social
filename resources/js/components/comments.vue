<template>
  <div>
    <table class="table table-striped">
      <tbody>
        
        <!-- {{ getComment}} -->
        <!-- <tr v-for="comment in commentData" :key="comment.id">
          <td>{{ comment.body }}</td>
        </tr> -->
      </tbody>
    </table>
  </div>
</template>

<script>
import { mapGetters } from 'vuex';
  export default {
    props: ['slug'],
    data(){
      return {
        // getComment:{
        //   body:'',
        //   created_at:'',
        //   id: '',
        //   post_id: '',
        //   updated_at:'',
        //   user_id:'',
        // },
      }
    },
    mounted(){
        console.log(this.slug);
  			this.$store.dispatch('GetComments',this.slug);
    },
    computed:{
      ...mapGetters([
   			 'getComment'
   			 ])
    }
  }
</script>

<style scoped>

</style>
