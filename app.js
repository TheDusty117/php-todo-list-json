const { createApp } = Vue;


createApp({
  data() {
    return{
      title: 'ToDo List',
      todos: [], //crei array vuoto
      newTodo: '',
    }
  },
  methods:{ 

    //metodo che salva i task on keyup enter
    saveTask(){
      console.log('save task!', this.newTodo) //uso v-model su input keyup, per prender il valore di cio che si scrive
      
      
      $data = {
        todo: this.newTodo
      }

      //INVIAMO DATI GRAZIE AD UN AUTOMATISMO DI AXIOS
      axios.post('./server.php',$data,{
        headers: { //axios ci permette di modificare-aggiungere il content-type degli header .
          'Content-Type': 'multipart/form-data'
        }
      }).then(res => {
        this.todos = res.data.results
        // this.todos.push(this.newTodo)
        this.newTodo = ''

      })
    },

    fetchTodoList(){ // --3--  faccio la chiamata al server.php per prendere il json FUNZIONE CHE FA CHIAMATA
      axios.get('server.php')
      .then(res => {   //--5-- Recupero la risposta PS. a questo punto noi abbiamo direttamente l'array, VEDI CONSOLE LOG
        console.log(res.data)
        this.todos = res.data.results
      })
      .catch(err => {
        console.log(err)
      })
    },
  },
  mounted(){
    this.fetchTodoList() // --4-- (invoco la funzione on mounted) PS. vai su"localhost/php-todo-list-json" poi inspector rete>fetch/XHR e vedi che ora viene fatta con successo la chiamata AXIOS al file server.php, che a sua volta prende e converte il file JSON
  },  

}).mount('#app')