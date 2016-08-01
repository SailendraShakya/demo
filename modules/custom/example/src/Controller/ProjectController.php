<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ProjectController.
 *
 * @package Drupal\example\Controller
 */
class ProjectController extends ControllerBase {

  /**
   * Project_list.
   *
   * @return string
   *   Return Hello string.
   */
  public function project_list() {
    return [
      '#theme' => 'example',
      '#projects' => $this->projects(),
      '#title' => 'Project List'
    ];
  }

  public function projects(){
    $projects = \Drupal::entityManager()->getStorage('projects')->loadMultiple();


    $project_filter = array();
    foreach($projects as $project){
      $projectarray['label'] = $project->label();
      $projectarray['name'] = $project->getProjectName();
      $projectarray['duration'] = $project->getDuration();
      $projectarray['id'] = $project->id();
      $projectarray['username'] = $this->getUserNameById($project->getUserId());
      array_push($project_filter, $projectarray);
    }
    return $project_filter;

  }

  public function getUserNameById($userId){
    $user = \Drupal::entityManager()->getStorage('projectuser')->load($userId);
    return $user->getUsername();

  }

  public function testdata(){
   return array(
      array('test' => 'Ellen Ripley', 'role' => 'Warrant Officer', 'status' => 'Alive'),
      array('test' => 'Ash', 'role' => 'Science Officer', 'notes' => 'Possibly synthetic.', 'status' => 'Unknown'),
      array('test' => 'Parker', 'role' => 'Chief Engineer', 'status' => 'Dead'),
    );
  }
}
