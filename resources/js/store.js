import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    post: '',
    comment: '',
  },
  mutations: {
    Post (state, post) {
      state.post = post;
    },
    Comment (state, comment){
      state.comment = comment;
    }
  },
  getters: {
    getPost: state =>{
      return state.post;
    },
    getComment: state =>{
      return state.comment;
    }
  },
  actions: {
    GetPost({ commit,state }){
      Axios.get('http://localhost:8000/api/post/')
      .then(res =>{
        console.log(res);
         commit('Post', res.data)
      })
      .catch(error =>{
        console.log(error);
      })
    },
    GetComments({ commit,state },slug){
      Axios.get('http://localhost:8000/api/post/'+slug+'/comment/')
      .then(res =>{
        console.log(res);
        commit('Comment',res.data)
      })
      .catch(error =>{
        console.log(error);
      })
    }
  }
})

export default store;
