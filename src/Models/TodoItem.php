<?php

namespace Todo;

class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
        // TODO: Implement me!
        // Create a new todo

        $query = "INSERT INTO todos (title, created, completed)
        VALUES ('$title', now(), 'false')";

        self::$db->query($query);
        self::$db->execute();

    }


    public static function updateTodo($todoId, $title, $completed = null)
    {
        // TODO: Implement me!
        // Update a specific todo

        $query = "UPDATE todos SET title = '$title', completed = '$completed' WHERE id = '$todoId'";

        self::$db->query($query);
        self::$db->execute();



    }

    public static function deleteTodo($todoId)
    {
        // TODO: Implement me!
        // Delete a specific todo
        $query = "DELETE FROM todos WHERE id = " . $todoId;
        self::$db->query($query);

        self::$db->execute();


    }
    
    // (Optional bonus methods below)
    // public static function toggleTodos($completed)
    // {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed
    // }

    // public static function clearCompletedTodos()
    // {
    //     // TODO: Implement me!
    //     // This is to delete all the completed todos from the database
    // }

}
