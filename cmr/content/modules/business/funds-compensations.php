<div>
	<div id="app">
		<div>
			<div id="preload"></div>
			<div class="container_not">
				<main>
					<router-view></router-view>
				</main>
			</div>
		</div>
	</div>
</div>
<!-- // ------------ CAJAS DE COMPENSACION INICIO -------------------------------------  -->
<template id="page-FundsCompensation">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-success" v-bind:to="{ name: 'FundsCompensation-Add' }">
					<span class="fa fa-plus"></span>
					Nuevo
				</router-link> 
				Cajas de Compensacion
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>ID</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="posts===null">
							<td colspan="4">Loading...</td>
						</tr>
						<tr v-else v-for="post in filteredposts">
							<td>{{ post.id }}</td>
							<td>{{ post.code }}</td>
							<td>{{ post.name }}</td>
							<td>
							<router-link class="btn btn-info btn-md" v-bind:to="{name: 'FundsCompensation-View', params: { fund_compensation_id: post.id }}"><i class="fas fa-eye"></i> </router-link>
							<router-link class="btn btn-warning btn-md" v-bind:to="{name: 'FundsCompensation-Edit', params: { fund_compensation_id: post.id }}"><i class="fas fa-pencil-alt"></i> </router-link>
							<router-link class="btn btn-danger btn-md" v-bind:to="{name: 'FundsCompensation-Delete', params: { fund_compensation_id: post.id }}"><i class="fa fa-trash"></i> </router-link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="view-FundsCompensation">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'FundsCompensation-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link>  
				Cajas de Compensacion
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<td>ID INTERNO</td>
						<td>{{ post.id }}</td>
					</tr>
					<tr>
						<td>CODIGO</td>
						<td>{{ post.code }}</td>
					</tr>
					<tr>
						<td>NOMBRE</td>
						<td>{{ post.name }}</td>
					</tr>
				</table>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>		  
</template>

<template id="add-FundsCompensation">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'FundsCompensation-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link>  
				Cajas de Compensacion
			</div>
			<div class="card-body">
				<form v-on:submit="createFundCompensation">
					<div class="form-group">
						<label for="add-content">Codigo</label>
						<input class="form-control" type="text" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="add-content">Nombre</label>
						<input class="form-control" type="text" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-success">Crear</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="edit-FundsCompensation">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'FundsCompensation-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link>  
				Cajas de Compensacion
			</div>
			<div class="card-body">
				<form v-on:submit="updateFundCompensation">
					<div class="form-group">
						<label for="edit-content">Codigo</label>
						<input class="form-control" id="edit-content" v-model="post.code" />
					</div>
					<div class="form-group">
						<label for="edit-content">Nombre</label>
						<input class="form-control" id="edit-content" v-model="post.name" />
					</div>
					<button type="submit" class="btn btn-success">Guardar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>

<template id="delete-FundsCompensation">
	<div>
		<div class="card mb-3">
			<div class="card-header">
				<router-link class="btn btn-secondary" v-bind:to="{ name: 'FundsCompensation-List' }">
					<span class="fa fa-window-close"></span>
					<!-- <span class="badge badge-default">Cerrar </span> -->
					Cerrar
				</router-link>  
				Cajas de Compensacion
			</div>
			<div class="card-body">
				<form v-on:submit="deleteFundCompensation">
					<p>The action cannot be undone.</p>
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>
	</div>
</template>
<!-- // ------------ CAJAS DE COMPENSACION FIN -------------------------------------  -->
