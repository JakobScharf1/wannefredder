import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DrTimetable } from './dr-timetable';

describe('DrTimetable', () => {
  let component: DrTimetable;
  let fixture: ComponentFixture<DrTimetable>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [DrTimetable]
    })
    .compileComponents();

    fixture = TestBed.createComponent(DrTimetable);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
