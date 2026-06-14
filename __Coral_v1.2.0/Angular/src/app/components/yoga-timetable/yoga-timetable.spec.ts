import { ComponentFixture, TestBed } from '@angular/core/testing';

import { YogaTimetable } from './yoga-timetable';

describe('YogaTimetable', () => {
  let component: YogaTimetable;
  let fixture: ComponentFixture<YogaTimetable>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [YogaTimetable]
    })
    .compileComponents();

    fixture = TestBed.createComponent(YogaTimetable);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
