const { createApp } = Vue;


createApp({
  data() {
    return{
      title: 'ToDo List',
      todos: [],
    }
  },
  methods:{ 
    fetchTodoList(){ //faccio la chiamata al server.php per prendere il json

      axios.get('server.php')

    }
  },
  mounted(){

  },

}).mount('#app')