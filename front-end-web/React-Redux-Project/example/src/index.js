import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import axios  from 'axios';
import { createStore } from 'redux';
import { Provider } from 'react-redux';
import Counter from './Counter';

const initialStates = {count:40,title:'CybertimeUP'};

function reducer(state = initialStates,action){
	if(action.type == 'INCREMENT'){
		return {count:state.count + 1,title:state.title};
	}else if(action.type == 'CHANGE_TITLE'){
		axios.get('https://my-json-server.typicode.com/typicode/demo/posts').then((response)=>{
			//console.log(response);
			store.dispatch({type:'CHANGE_TITLE_FINAL',title:response.data[0].title});
		})
	}else if(action.type == 'CHANGE_TITLE_FINAL'){
		return {count: state.count,title:action.title};
	}
	return state;
}

const store = createStore(reducer);

const App = () => (
		<Provider store={store}>
    		<Counter />
    	</Provider>
);
  
ReactDOM.render(<App />, document.getElementById('root'));
