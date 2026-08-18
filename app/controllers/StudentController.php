<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $this->call->view('student/homepage');
    }

    public function profile()
    {
        $student = [
            'student_id' => '2026-0001',
            'name' => 'Joana Daniela P. Romualdo',
            'course' => 'BS Information Technology',
            'year' => '2nd Year',
            'section' => 'A',
            'email' => 'joana@example.com'
        ];

        $this->call->view('student/profile', $student);
    }
}