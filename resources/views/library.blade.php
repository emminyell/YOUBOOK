<style>
    #lists{
	display:flex;
	flex-direction:row;
	flex-wrap:no-wrap;
	justify-content:center;
	align-items:flex-start;
	width:90%;
	margin:auto;
}
.booklists{
	width:50%;
	display:flex;
	flex-direction:column;
	align-items:center;
}
.booklists h1{
	font-family: 'Gloria Hallelujah', cursive;
	margin-bottom:0;
	height:100px;
	text-align:center;
}
.title{
	display:flex;
	justify-content:space-around;
}
h3{
	font-family: 'Gloria Hallelujah', cursive;
}
h3:nth-child(1){
	color:blueviolet;
}
h3:nth-child(2){
	color:#FEDD31;
}
p{
	font-family: 'Dosis', sans-serif;
}
ul{
	list-style:none;
	margin:none;
	width:90%;
}
li{
	width:98%;
	height:150px;
	background: transparent;
	padding:10px;
	margin:none;
	margin-bottom:20px;
	cursor:pointer;
	font-family: 'Dosis', sans-serif;
	background: radial-gradient(white 30%,whitesmoke);
	box-shadow: 2px 2px 2px grey;
}
.icons{
	display:flex;
	align-items:center;
}
.icons div{
	margin-right: 50px;
	display:flex;
	align-items:center;
}
.icons div .fa{
	margin-right:20px;
}
.bookToBeRead{
	border-right: 3px solid blueviolet;
}
.bookToBeRead .fa-bookmark{
	color:blueviolet;
}
.bookFinished{
	border-right: 3px solid #FEDD31;
}
.bookFinished .fa-check-circle{
	color:#FEDD31;
}
</style>
@section('content')
<div id="books"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.8.0/umd/react.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.8.0/umd/react-dom.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>


<script>
    //This class is our app. Inside of it, there is a list class, which is itself made of list items.
class ListBooks extends React.Component{
	constructor(props){
		super(props);
		this.state={
			items:[
        {id: 1, book: 'Harry Potter', author: 'JK Rowling', saved:true, read:false},
        {id: 2, book: 'Le Horla', author: 'Guy de Maupassant', saved:false, read:true},
				{id: 3, book: 'Fahrenheit 451', author: 'Ray Bradbury', saved:false, read:false},
				{id: 4, book: 'La Peste', author: 'Albert Camus', saved:false, read:false},
				{id: 5, book: 'Les trois Mousquetaires', author: 'Alexandre Dumas', saved:false, read:false},
				{id: 6, book: 'Les Miserables', author: 'Victor Hugo', saved:false, read:false},
				{id: 7, book: "L'Alchimiste", author: 'Paulo Coelho', saved:false ,read:false}
			],
			booksToRead:[
				{id: 1, book: 'Harry Potter', author: 'JK Rowling', saved:true, read:false},
        {id: 2, book: 'Le Horla', author: 'Guy de Maupassant', saved:false, read:true}
			]
		}
	}
	
updateList(id){
	let newItems = this.state.items.slice();
	let newBooks = this.state.booksToRead.slice();
	const index = newItems.findIndex(i => i.id===id);
	newItems[index].saved = !newItems[index].saved;
	if(newItems[index].saved){
			newBooks.push(newItems[index]);
	}else{
		newBooks = newBooks.filter(i => i.id!==id);
	}
	this.setState({items:newItems, booksToRead:newBooks});
}
	
updateRead(id){
	let newBooks = this.state.booksToRead.map(book =>
	  book.id === id ? Object.assign({}, book, {read: !book.read}) : book
	);
	let newItems = this.state.items.map(book =>
	  book.id === id ? Object.assign({}, book, {read: !book.read}) : book
	);
	this.setState({items:newItems, booksToRead:newBooks});
}
	
	render(){
		return(
			<div>
				<div id='lists'>
					<List 
						items={this.state.items} 
						updateList={(id)=>this.updateList(id)}
					/>
					<BooksToRead 
						booksToRead={this.state.booksToRead} 
						updateRead={(id)=>this.updateRead(id)}
					/>
				</div>
			</div>
		);
	}
}

//This class render the list of books that you didn't read yet
var List = React.createClass({	
	render(){
		let itemsToDisplay = this.props.items.map(i=>{
      return (
				<ListItem 
					id={i.id} 
					book={i.book} 
					author={i.author} 
					saved={i.saved} 
					read={i.read}
					updateList={()=>this.props.updateList(i.id)}
				/>
			);
    });
		return(
			<div className='booklists'>
				<h1>Library</h1>
				<ul>
					{itemsToDisplay}
				</ul>
			</div>
		);
	}	
});

//This class render a component from the list
var ListItem = React.createClass({
	render(){
	let classBook=''; 
	if(this.props.read || this.props.saved){
		classBook = 'bookToBeRead';
	}
		return(
			<li 
				id={this.props.id} 
				className={classBook}
				onClick={()=>this.props.updateList()}
					>
				<div className='itemPresentation'>
					<h2>{this.props.book}</h2>
					<p>{this.props.author}</p>
				</div>
				<div className='icons'>
					<div>
						<i className="fa fa-bookmark fa-2x" aria-hidden="true" />
						<p>{this.props.read?'Finished':this.props.saved?'Borrowed':''}</p>
					</div>
				</div>
			</li>
		);
	}	
	
});

var BooksToRead = React.createClass({	
	render(){
		let itemsToDisplay = this.props.booksToRead.map(i=>{
      return (
				<BookItem 
					id={i.id} 
					book={i.book} 
					author={i.author}
					read={i.read}
					updateRead={()=>this.props.updateRead(i.id)}
				/>
			);
    });
		return(
			<div className='booklists'>
					<h1>Your Book List</h1>
				<ul>
					{itemsToDisplay}
				</ul>
			</div>
		);
	}	
});

//This class render a component from the list
var BookItem = React.createClass({
	render(){
		return(
			<li 
				id={this.props.id} 
				className={this.props.read?'bookFinished': null}
				onClick={()=>this.props.updateRead()}
			>
				<div className='itemPresentation'>
					<h2>{this.props.book}</h2>
					<p>{this.props.author}</p>
				</div>
				<div className='icons'>
					<div>
						<i className="fa fa-check-circle fa-2x" aria-hidden="true" />
						<p>{this.props.read?'Finished':'Reading'}</p>
					</div>
				</div>
			</li>
		);
	}	
	
});

ReactDOM.render(
  <ListBooks />,
  document.getElementById('books')
);
</script>
@endsection
