node_setup:
	docker exec cad-node bash -c "npm install"
	docker exec cad-node bash -c "npm start"
