import React from 'react';
import { connect } from 'react-redux';
import './App.css';

//import { createStore } from 'redux';
//import axios from 'axios';

/* ABOUT REDUX */

/*

const reducer = function(state,action){
  if(action.type === "INC"){
    return state + action.payload;
  }else if(action.type == "DESC"){
    return state - action.payload;
  }else if(action.type == 'INFO'){
    console.log(action.title);
  }
  return state;
}

const store = createStore(reducer,0);

store.subscribe(function(){
  console.log("The state changed!",store.getState());
})

store.dispatch({type:'INC',payload:1});

axios.get('https://my-json-server.typicode.com/typicode/demo/posts').then((response)=>{
  console.log(response);
  store.dispatch({type:'INFO',title:response.data[0].title});
});

*/

class Counter extends React.Component{

  increment = ()=>{
      //TODO: TELL THE FUNCTION FOR IMPLEMENT THE OUR REDUX.
      this.props.dispatch({'type':'INCREMENT'});
  }

  changeTitle = ()=>{
      //TODO: TELL THE FUNCTION FOR CHANGE THE TITLE OF THE OUR REDUX.
      this.props.dispatch({'type':'CHANGE_TITLE'});
  }

  render(){
    return(
      <div>
        <button onClick={this.changeTitle}>Change title!</button>
        <button onClick={this.increment}>More!</button>
        <h2>{this.props.count}</h2>
        <h3>{this.props.title}</h3>
      </div>
    )
  }

}

const mapStateToProps = state => ({count:state.count,title:state.title});
export default connect(mapStateToProps)(Counter);