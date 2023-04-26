
up: 
	@cd srcs; docker-compose up
down:
	@cd srcs; docker-compose down

clean :
	@docker rmi $$(docker images -qa); docker volume rm $$(docker volume ls)

re: clean up
